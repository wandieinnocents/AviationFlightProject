<?php

    $json_string = '{"CUSTOMERS_LIST":[{"user_name":"KASIRYE Sulaiman ",
      "customer_id":"2","mobile_number":"0704235123"},
      {"user_name":"PANDE William  Moris","customer_id":"3","mobile_number":"0703683125"},
      {"user_name":"AHABWE Peter Keith","customer_id":"5","mobile_number":"0705447788"},
      {"user_name":"NAKAZZI Magaret ","customer_id":"7","mobile_number":"0745214554"},
      {"user_name":"RASH Arnold Kent","customer_id":"8","mobile_number":"0745214555"},
      {"user_name":"NALWOGA Harriet ","customer_id":"9","mobile_number":"0709564234"}]}';

    show_result($json_string);

    function show_result($string) { ?>
        <table style='width: 600px; height: auto; border: solid 1px black'>
            <tr>
                <th style='width: 50px; border: solid 1px black'>ID</th>
                <th style='width: 400px; border: solid 1px black'>Name</th>
                <th style='width: 150px; border: solid 1px black'>Contact</th>
            </tr>
            <?php
                $array = json_decode($string, TRUE);
                foreach ($array['CUSTOMERS_LIST'] as $customer) {?>
                    <tr>
                        <td style='width: 50px; border: solid 1px black'><?php echo $customer['customer_id']?></td>
                        <td style='width: 400px; border: solid 1px black'><?php echo $customer['user_name']?></td>
                        <td style='width: 150px; border: solid 1px black'><?php echo $customer['mobile_number']?></td>
                    </tr>
               <?php } ?>
        </table>
        <?php
    }
