<?php

/* Git add -P
Displays the diffs of the source code broken out into "hunks".
Gives you options for each hunk as you go through.
y = Yes
n = No, don't add this hunk
d = No, don't add this hunk and all remaining hunks.
q = quit; do not stage this file
s = Split the hunk into smaller hunks.
e = Manually edit the hunk.
g = select a hunk to go to
/ = search for a hunk matching a regex
j = undecided, see next undecided hunk
J = undecided, see next hunk
k = undecided, see previous undecided hunk
K = undecided, see previous hunk
 */

class SomeClass {

    public function doThings()
    {
        return "stuff";
    }
}