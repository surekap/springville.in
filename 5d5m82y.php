<?php
define("SITE", "springville.in");

$repo_dir = '/var/www/' . SITE . '/repo';
$web_root_dir = '/var/www/' . SITE . '/public';

// Full path to git binary is required if git is not in your PHP user's path. Otherwise just use 'git'.
$git_bin_path = 'git';

$update = true;

// Parse data from Bitbucket hook payload
//$payload = json_decode($_POST['payload']);
$payload = json_decode($_REQUEST['payload']);

if (empty($payload->commits)){
  // When merging and pushing to bitbucket, the commits array will be empty.
  // In this case there is no way to know what branch was pushed to, so we will do an update.
  $update = true;
} else {
  foreach ($payload->commits as $commit) {
    $branch = $commit->branch;
    if ($branch === 'master' || isset($commit->branches) && in_array('master', $commit->branches)) {
      $update = true;
      break;
    }
  }
}

if ($update) {
  // Do a git checkout to the web root
  exec('cd ' . $repo_dir . ' && ' . $git_bin_path  . ' fetch');
  exec('cd ' . $repo_dir . ' && GIT_WORK_TREE=' . $web_root_dir . ' ' . $git_bin_path  . ' checkout -f');

  // Log the deployment
  $commit_hash = shell_exec('cd ' . $repo_dir . ' && ' . $git_bin_path  . ' rev-parse --short HEAD');
  file_put_contents('deploy.log', date('m/d/Y h:i:s a') . " Deployed branch: " .  $branch . " Commit: " . $commit_hash . "\n", FILE_APPEND);
}
?>