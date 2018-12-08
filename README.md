# Buildy
Projet Annuelle 3 IW1
 
 ## Requirements
 - Docker

## Optional Tools
- Gitkraken
- SonarQube

## Cloning the Repo

`git clone` https://github.com/Himyo/Buildy.git<br>
OR<br>
`git clone` git@github.com:Himyo/Buildy.git<br>
For this method to work an [SSH key as to be associated](https://help.github.com/articles/connecting-to-github-with-ssh/) to your account.

## Editing the Projet
Run the following in the command line:
```sh
git checkout develop
git pull
git checkout -b feature/<your_branch_name>
...
...
git add path/to/edited/file1 path/to/edited/file2 path/to/edited/file3 
git commit -m "Explicit and short message explaining what I did"
git push -u origin feature/<your-branch_name>
git checkout develop
```
A little explanation: 
- First thing first! The branch you'll probably be on is develop but just in case we'll move our current position to it.

- Next, we're pulling the possible change added to the remote version of develop. This will reduce the chance of us [having to rebase our branch](#Rebase-a-branch) later.

- Next, we're creating our new branch. This branch only exist on our computer for now.

- Next, awesome coding skill are being used to make this projet the best no one ever was.

- Next, we're prepping the files we've edited/added/deleted for a commit, be careful to add ONLY the modified file.

- Next, we're commit the file be sure to put concise message. "Fixing", "Syntax", "Cleaning" are fine BUT NO ".", "lala", "u gay" or imma pee in ur ass.

- Next, we're pushing our branch to create a remote one which can then be merged with develop after being reviewed. DO NOT PUSH TO DEVELOP I'm gonna seriously pee in ur ass don't do that.

- Finally, we've finished our change so we're going back to develop to not mess up the history of our futur branch, always do that, or you might as well push to develop but you know where this is going.

## Rebase a branch
You either messed up or didn't pull or your branch falled behind by bad luck so you can't push and you're as stucked as you're fucked
```sh
git checkout develop
git pull --rebase
git checkout feature/<your_branch_name>
git rebase develop
git push origin feature/<your_branch_name> --force
```
