<?php
return [
  "usermanage_url"      => "dashboard/users",
  /*
  |--------------------------------------------------------------------------
  | master_file_extend
  |--------------------------------------------------------------------------
  | Usually extends the default Laravel layout file. However, you can specify
  | another file to extend. e.g you can extend another package's main layout
  | file like  mypackage::layouts.app (depending on its views are)
  */
  "master_file_extend" => "layouts.app",

  /*
  |--------------------------------------------------------------------------
  | Header and Footer Yield Inserts for your master file
  |--------------------------------------------------------------------------
  |
  | Chatter needs to add css or javascript to the header and footer of your
  | master layout file. You can choose what these will be called. FYI,
  | chatter will only load resources when you hit a forum route.
  |
  | example:
  | Inside of your <head></head> tag of your master file, you'll need to
  | include @yield('css').
  |
  | Next, before the ending body </body>, you will need to include the footer
  | yield like so @yield('js')
  |
  */

  'yields' => [
      'head'   => 'css',
      'footer' => 'js',
      'usermanage_content'=>'content'
  ],

  /*
  |--------------------------------------------------------------------------
  | perpage
  |--------------------------------------------------------------------------
  |
  | When you list users, they are paged. Choose the number of users to display
  | per page.
  | It defaults to 20
  |
  */
 'perpage' => 20
];
