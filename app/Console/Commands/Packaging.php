<?php
/**
 * Command for LaraAdmin Package Development
 * Help: http://laraadmin.com
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class Packaging extends Command
{
    /**
     * The command signature.
     *
     * @var string
     */
    protected $signature = 'la:packaging';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = '[Developer Only] - Copy LaraAdmin-Dev files to package: "dwij/laraadmin"';
    
    protected $exportConfig = [
        
    ];

    /**
     * Generate a CRUD files inclusing Controller, Model and Routes
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Exporting started...');
        
    }
}
