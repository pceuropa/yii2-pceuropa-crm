<?php
return [
           'form1' => [
               'body' => '[[{"field": "input", "type": "text", "width": "col-md-5", "name": "email", "placeholder": "email"},{"field": "input", "name": "pass", "type": "text", "placeholder": "pass", "width": "col-md-5"},{"field": "submit", "width": "col-md-2", "backgroundcolor": "btn-info", "label": "Submit"}]]',
               'title' => 'title1',
               'author' => 1,
               'url' => 'address-url',
           ],
           'form2' => [
               'body' => '[[{"field":"input","type":"text","width":"col-md-6","name":"name","label":"Email","require":true},{"field":"input","name":"pass","type":"text","label":"Password","width":"col-md-6","require":true}],[],[{"field":"checkbox","width":"col-md-12","items":[{"text":"Remember me","checked":true,"value":1}],"name":"remember"}],[{"field":"description","width":"col-md-12","textdescription":"<p><a target=\"_blank\" href=\"https://pceuropa.net/blog/\">I forgot my password.</a></p>","":"https://pceuropa.net/blog/"}],[{"field":"submit","width":"col-md-12","backgroundcolor":"btn-info","label":"Submit"}]]',
               'title' => 'title2',
               'author' => 2,
               'url' => 'forms',
           ],
       ];
