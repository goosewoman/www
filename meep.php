<?php
    require __DIR__ . '/MinecraftQuery.class.php';

    $Query = new MinecraftQuery( );

    try
    {
        $Query->Connect( 'mc.ecocitycraft.com', 25565, 1 );

        print_r( $Query->GetStatus( ) );
    }
    catch( MinecraftQueryException $e )
    {
        echo $e->getMessage( );
    }
?>