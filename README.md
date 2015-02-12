# GitDemo
Demoing Git

What is Git?
Git is a Version Control System, it is like an undo button on steroids. 

Key Concepts
With git you can modify a file, stage it, commit it, then push it. Staging a file just says you are done editing it, and it is ready to be committed.
You can stage a file, unstage a file, stage parts of a file but not other parts as I will show you. All to your hearts content.
Comitting a file creates history, you have locked that file in and written a note explaining what you did to it.
Pushing a file just takes your comits and sends them to the main repo where other developers can see them. We push to GitHub which is an online website
where we can access the main repos and comment on each others code.

You also have branches, so you start on a branch called Master. You can then create a different branch called blarg and you can mess the code up all you want
because you can just switch back to your master branch if you need too and start over. When you are done working on a branch you can merge it back in to your
master and Git will sort out what code goes where. So if Master has changed since you checked out a branch, your old code in the branch is replaced by the new
code in master and vice versa.

The last general concept I will mention is Merge Conflicts. If I edit a file, and Josh edits the same file in the same way, and we try to merge those files
together we will get a conflict. Git will overlay our changes and we will have to manually suss out what changes to keep and what to get rid of.

Git Add -p
To start lets make some changes to SomeClass.php, and we can stage it using Git Add -p. This command allows us too step through our changes,
take one last look at what we did and spot check for errors.


Some helpful commands
git reflog
Displays all of your commits with the commit id out to 7 numbers, which is all you need

git log --all --decorate --oneline --graph
Displays a pretty way to view the history of your repo

git merge --abort, git rebase --abort
Back out of a merge or rebase if conflicts scare you off

git commit --amend 
Modify the most recent commit message

git rebase -i (commit some change, then modify the commit messages)
Modify your commits to clean them up before pushing

git checkout - = goes back to previous branch
git merge -    = merge in previous branch

git rev-parse          = tells you what  commit you are on.
git rev-parse HEAD~1   = tells us the most recent commit
git reset -hard HEAD~1 = reset back one commit

Fast Forward Merge
You branched but nothing has happened on master, so you don't get a merge commit.
http://img.hades.name/blog-media/git/git-rebase.png

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

ReReRe
Another interesting feature I learned about in the conference was ReReRe, which stands for Reuse Recorded Resolution and it allows you to record when
satisfy merge conflicts so if the same conflict happens again, Git can just take care of it for you. I'm not 100% sure of a scenerio where this would actually
come in handy, but I can fabricate a demo.