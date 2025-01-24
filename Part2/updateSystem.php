
<?php
$ip = "127.0.0.1:161";
$Property = $_POST["Property"];
$Value = $_POST["Value"];
$oidMap = [
    'sysContact' => '.1.3.6.1.2.1.1.4.0',
    'sysName' => '.1.3.6.1.2.1.1.5.0',
    'sysLocation' => '.1.3.6.1.2.1.1.6.0',
];
if (isset($Property) && isset($Value)) {

    if (isset($oidMap[$Property])) {
        $result = snmpset($ip, "public", $oidMap[$Property], "s", $Value);
        echo json_encode(['success' => $result]);
        return;
    }
}

http_response_code(400);
echo json_encode(['error' => 'Invalid request']);

?>