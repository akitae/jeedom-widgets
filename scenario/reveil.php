$currentDate = date('Y-m-d', strtotime('now'));
$currentHour = date('Hi', strtotime('now'));
$currentDay = intval(date('w', strtotime('now')));
$arrayDay = ['Dimanche', 'Lundi', 'Mardi','Mercredi', 'Jeudi', 'Vendredi','Samedi'];

$alarmActif = cmd::byString('#[Chambre][VIRTUEL - Reveil][Etat]#')->execCmd();
$alarmHour = cmd::byString('#[Chambre][VIRTUEL - Reveil][Heure_Reveil]#')->execCmd();
$dayIsChecked = cmd::byString('#[Chambre][VIRTUEL - Reveil]['.$arrayDay[$currentDay].']#')->execCmd();
//alarm on for 30 min
$endAlarm = $alarmHour + 30;

if($scenario->getData('wake-up') == 0 && $alarmActif == 1 && $dayIsChecked == 1 && $currentHour >= $alarmHour && $currentHour <= $endAlarm) {
    $scenario->setData('wake-up',1);
}else if($scenario->getData('wake-up') == 1) {
    $scenario->setData('wake-up',0);
}
