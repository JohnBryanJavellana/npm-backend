import subprocess
import sys

def runProcess(branch):
    subprocess.run(["git", "add", "."])
    subprocess.run(["git", "commit", "-m", "123"])
    subprocess.run(["git", "push", "origin", str(branch)])
    subprocess.run(["git", "status"])

def main():
    if(len(sys.argv) > 2 or len(sys.argv) <= 1):
        print("Check if branch is provided")
        return

    branch = sys.argv[1]
    runProcess(branch=branch)

if __name__ == "__main__":
    main()