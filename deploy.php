<?php
namespace Deployer;

require 'recipe/laravel.php';

set('application', 'my_project');
set('repository', 'git@github.com:strangekai/macmaster.git');
set('git_tty', true);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

host('macmaster.co.uk')
    ->user('root')
    ->identityFile('~/.ssh/id_rsa')
    ->stage('production')
    ->set('deploy_path', '/var/www/macmaster.co.uk/root');
    
// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('restart-php', function () {
    run('sudo service php7.2-fpm reload');
});

task('artisan:optimize', function () {});

after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'artisan:migrate');
after('deploy:symlink', 'restart-php');
