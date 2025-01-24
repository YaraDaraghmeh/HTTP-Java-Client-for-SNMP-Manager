<?php
$ip = "127.0.0.1:161";

$physicalAddresses = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
$ipAddresses = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$types = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");

$arpTable = [];
for ($i = 0; $i < count($physicalAddresses); $i++) {
    $arpTable[] = [
        'index' => $i ,
        'ipAddress' => $ipAddresses[$i],
        'physicalAddress' => $physicalAddresses[$i],
        'type' => $types[$i]
        
    ];
}

echo json_encode($arpTable);
?>