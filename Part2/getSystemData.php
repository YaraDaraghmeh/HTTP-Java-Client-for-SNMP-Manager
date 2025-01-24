<?php
$ip = "127.0.0.1:161";
$data = [
    'sysDescr' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0"),
    'sysObjectID' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0"),
    'sysUpTime' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0"),
    'sysContact' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0"),
    'sysName' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0"),
    'sysLocation' => snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0")
];
echo json_encode($data['sysDescr'])."@";
echo json_encode($data['sysObjectID'])."@";
echo json_encode($data['sysUpTime'])."@";
echo json_encode($data['sysContact'])."@";
echo json_encode($data['sysName'])."@";
echo json_encode($data['sysLocation']);
?>