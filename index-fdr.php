<?php
require_once 'google/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('FDR_PT');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/servicekey.json');
$service = new Google_Service_Sheets($client);
#$spreadsheetId = "1XtspnkaEpz3GZIr9dU9qtl002hEyOt6l9SVZBVd9YAM"; // Pare
$spreadsheetId = "1xdVCgL3zSolvJixsq5XcrHQ7BLgRiDlPoWR5D2ICzR8"; // Keith

// Description Query
$desc_range = 'Periodic Table Descriptions!A2:C107';
$desc_resp = $service->spreadsheets_values->get($spreadsheetId, $desc_range);
$desc_els = $desc_resp->getValues();

// Row 1
$r1_el_range = 'Periodic Table Entries!A2:C19';
$r1_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r1_el_range);
$r1_els = $r1_el_resp->getValues();

// Row 2
$r2_el_range = 'Periodic Table Entries!A20:C37';
$r2_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r2_el_range);
$r2_els = $r2_el_resp->getValues();

// Row 3
$r3_el_range = 'Periodic Table Entries!A38:C55';
$r3_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r3_el_range);
$r3_els = $r3_el_resp->getValues();

// Row 4
$r4_el_range = 'Periodic Table Entries!A56:C73';
$r4_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r4_el_range);
$r4_els = $r4_el_resp->getValues();

// Row 5
$r5_el_range = 'Periodic Table Entries!A74:C91';
$r5_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r5_el_range);
$r5_els = $r5_el_resp->getValues();

// Row 6
$r6_el_range = 'Periodic Table Entries!A92:C109';
$r6_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r6_el_range);
$r6_els = $r6_el_resp->getValues();

// Row 7
$r7_el_range = 'Periodic Table Entries!A110:C127';
$r7_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r7_el_range);
$r7_els = $r7_el_resp->getValues();

// Row 8
$r8_el_range = 'Periodic Table Entries!A128:C141';
$r8_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r8_el_range);
$r8_els = $r8_el_resp->getValues();

// Row 9
$r9_el_range = 'Periodic Table Entries!A142:C155';
$r9_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r9_el_range);
$r9_els = $r9_el_resp->getValues();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Franklin D. Roosevelt's Periodic Table New Deal Prgrams</title>
	<link rel="stylesheet" href="style-fdr.css?v=<?php echo filemtime('style.css'); ?>" media="screen, projection" />
</head>

<body>
	<main>
		<h2>Franklin D. Roosevelt's Periodic Table</h2>
		<h1>New Deal Programs</h1>

		<div class="elements">
			<div class="row row-1">
				<?php
				if (empty($r1_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r1_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-2">
				<?php
				if (empty($r2_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r2_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-3">
				<?php
				if (empty($r3_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r3_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-4">
				<?php
				if (empty($r4_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r4_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-5">
				<?php
				if (empty($r5_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r5_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-6">
				<?php
				if (empty($r6_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r6_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-7">
				<?php
				if (empty($r7_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r7_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>
		</div>

		<div class="f-block elements">
			<div class="row row-8">
				<?php
				if (empty($r8_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r8_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>

			<div class="row row-9">
				<?php
				if (empty($r9_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r9_els as $row) {
						$class  = $row[1];
						$title  = $row[2];
						$target = '#' . $title;

						if ($class == 'element empty-element') {
							echo '<div class="element empty-element"></div>';
						} else {
							echo '<a href="' . $target . '" class="' . $class . '"><span>' . $title . '</span></a>';
						}
					}
				}
				?>
			</div>
		</div>

		<ul class="key">
			<li class="group-rsvlt">The Roosevelts</li>
			<li class="group-progs">Programs</li>
			<li class="group-nra">NRA Affiliates</li>
			<li class="group-ag">Agriculture Affiliates</li>
			<li class="group-cab">Cabinet Members</li>
			<li class="group-nya">NYA Affiliates</li>
			<li class="group-econ">Economic Affiliates</li>
			<li class="group-adv">Advisers and Supporters</li>
			<li class="group-pwa">Public Works Affiliates</li>
			<li class="group-nde">New Deal Events</li>
		</ul>

		<div class="descriptions">
			<?php
			if (empty($r1_els)) {
				print 'No data found.<br />';
			} else {
				foreach ($desc_els as $row) {
					$class  = $row[0];
					$id  = $row[1];
					$desc = $row[2];

					echo '<div class="' . $class . '" id="' . $id . '">' . "\n";
					echo "\t\t\t\t" . $desc . "\n";
					echo "\t\t\t" . '</div>' . "\n";
				}
			}
			?>
		</div>
	</main>

	<script type="text/javascript">
		Array.prototype.forEach.call(document.querySelectorAll('.key li'), function(li) {
			li.addEventListener('mouseenter', function() {
				document.body.classList.add('hover-' + this.className);
			});
			li.addEventListener('mouseleave', function() {
				document.body.classList.remove('hover-' + this.className);
			});
		});
	</script>
</body>

</html>