# GitDemo
Demoing Git

Things worth mentioning
git reflog
Displays all of your commits with the commit id out to 7 numbers

git log --all --decorate --oneline --graph
Displays a pretty way to view the history of your repo

git merge --abort, git rebase --abort
Back out of a merge or rebase if conflicts scare you off

git commit --amend 
Modify the most recent commit message

git rebase -i (commit some change, then modify the commit messages)
Modify your commits to clean them up before pushing

git checkout - = goes back to previous branch
git merger -   = merge in previous branch

git rev-parse          = tells you what  commit you are on.
git rev-parse HEAD~1   = tells us the most recent commit
git reset -hard HEAD~1 = reset back one commit

Fast Forward Merge
You branched but nothing has happened on master, so you don't get a merge commit.

git merge --no-ff 
Forces a non-fast forward merge so you do get a merge commit, meaning you can log a message with the merge for
your reference later.


git bisect start 8a50f36 (A commit where the issue exists)
git bisect good 8913783 (A commit where the issue is good)
Git will then checkout commits between those two and if the checkout is still broken you can say
git bisect bad
if the commit is good you can say 
git bisect good
Doing this you can narrow down to the commit where the issue originated.
When you are done you can type git bisect reset


