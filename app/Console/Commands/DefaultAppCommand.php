<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\Default\DefaultUser;
use Illuminate\Console\Command;

class DefaultAppCommand extends Command
{
    /**
     * Nom et signature de la commande.
     *
     * @var string
     */
    protected $signature = 'app:default';

    /**
     * Description de la commande.
     *
     * @var string
     */
    protected $description = 'Paramètres par défaut de l\'application.';

    /**
     * Executer les commandes.
     */
    public function handle()
    {
        //Créer l'utilisateur par défaut
        $users = User::all();
        if ($users->isEmpty()) {
            DefaultUser::create();
        }

        $this->info("Paramètres par défaut créés avec succès.");
        return Command::SUCCESS;
    }
}
