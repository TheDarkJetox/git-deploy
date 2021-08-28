<?php
define("TOKEN", "secret-token");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "git@github.com:username/repository.git"); // The SSH URL to your repository
define("DIR", "C:/apache/htdocs/example.com/www");                     // The path to your repository, saved on your local machine. Where the rootfolder for your webserver is. You need to pull manually the first time, either using Github Desktop or Git Bash. It should be fine to have spaces in the folder names, from my own testing it still worked with spaces.
define("BRANCH", "refs/heads/master");                                 // The branch route, default branch is now called 'main' on Github.
// If you get this error; "=== ERROR: Pushed branch `` does not match BRANCH `refs/heads/master` ===". Try re-naming the branch on Github, to something else than 'main'. You can change it back to 'main' afterwards, if preferred. 
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "\"C:/Program Files/Git/bin/git.exe\"");                 // The path to the git executable; this is the default path, when installed with the installer. Change the path between the inner double quotes, if you installed Git in a different folder.
define("MAX_EXECUTION_TIME", 180);                                     // Override for PHP's max_execution_time (may need set in php.ini)
define("BEFORE_PULL", "");                                             // A command to execute before pulling
define("AFTER_PULL", "");                                              // A command to execute after successfully pulling

require_once("deployer.php");
