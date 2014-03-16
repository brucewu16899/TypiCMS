<?php

class TestSettingsSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->truncate();

        $typi_settings = array(
            array('id' => '1','package' => NULL,'group_name' => 'config','key_name' => 'webmasterEmail','value' => 'info@typidesign.be','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '2','package' => NULL,'group_name' => 'config','key_name' => 'typekitCode','value' => '','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '3','package' => NULL,'group_name' => 'config','key_name' => 'googleAnalyticsCode','value' => '','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '4','package' => NULL,'group_name' => 'config','key_name' => 'langChooser','value' => '1','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '5','package' => NULL,'group_name' => 'fr','key_name' => 'websiteTitle','value' => 'Mon nouveau site web','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '6','package' => NULL,'group_name' => 'fr','key_name' => 'status','value' => '1','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '7','package' => NULL,'group_name' => 'nl','key_name' => 'websiteTitle','value' => 'Mijn nieuwe website','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '8','package' => NULL,'group_name' => 'nl','key_name' => 'status','value' => '1','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '9','package' => NULL,'group_name' => 'en','key_name' => 'websiteTitle','value' => 'My new website','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24'),
            array('id' => '10','package' => NULL,'group_name' => 'en','key_name' => 'status','value' => '1','type' => '','environment' => NULL,'created_at' => '2013-11-20 20:06:24','updated_at' => '2013-11-20 20:06:24')
        );

        DB::table('settings')->insert( $typi_settings );

    }

}