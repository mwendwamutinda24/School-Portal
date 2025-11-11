while ($row = mysqli_fetch_assoc($result)) {

  // Cast subject scores to integers
  $math = (int)$row['math'];
  $eng = (int)$row['eng'];
  $kisw = (int)$row['kisw'];
  $sst = (int)$row['sst'];
  $scie = (int)$row['scie'];
  $ca = (int)$row['ca'];
  $agri = (int)$row['agri'];

  // Calculate total
  $total = $math + $eng + $kisw + $sst + $scie + $ca + $agri;

  // Function to determine award level
  function getAward($score) {
    if ($score > 75) return "E.e";
    elseif ($score > 50) return "Me";
    elseif ($score > 25) return "A.e";
    else return "Be";
  }

  echo "
    <tr>
      <td>{$row['Assesment']}</td>
      <td>{$row['firstName']}</td>
      <td>{$row['lastName']}</td>
      <td>{$math}</td>
      <td>{$eng}</td>
      <td>{$kisw}</td>
      <td>{$sst}</td>
      <td>{$scie}</td>
      <td>{$ca}</td>
      <td>{$agri}</td>
      <td>{$total}</td>
      <td>" . getAward($total) . "</td>
    </tr>
    <tr>
      <td colspan='3'><strong>Award Level</strong></td>
      <td>" . getAward($math) . "</td>
      <td>" . getAward($eng) . "</td>
      <td>" . getAward($kisw) . "</td>
      <td>" . getAward($sst) . "</td>
      <td>" . getAward($scie) . "</td>
      <td>" . getAward($ca) . "</td>
      <td>" . getAward($agri) . "</td>
      <td colspan='2'></td>
    </tr>
  ";
}
