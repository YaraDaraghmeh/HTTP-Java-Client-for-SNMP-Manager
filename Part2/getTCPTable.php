<?php
$ip = "127.0.0.1:161";

$states = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.1");
$localAddresses = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.2");
$localPorts = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.3");
$remoteAddresses = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.4");
$remotePorts = snmp2_walk($ip, "public", ".1.3.6.1.2.1.6.13.1.5");

$tcpTable = [];
for ($i = 0; $i < count($states); $i++) {
    $tcpTable[] = [
        'index' => $i,
        'state' => $states[$i],
        'localAddress' => $localAddresses[$i],
        'localPort' => $localPorts[$i],
        'remoteAddress' => $remoteAddresses[$i],
        'remotePort' => $remotePorts[$i]
    ];
}

echo json_encode($tcpTable);
?>