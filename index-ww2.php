<?php
require_once 'google/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('WW2_PT');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');

echo '<!-- Google Sheets Connection -->';
$client->setAuthConfig(__DIR__ . '/servicekey-ww2.json');
$spreadsheetId = "1sNG-3G1v4S09Atdwp1CuouMaHloYDcHaCzCsMk3Kc40";

$service = new Google_Service_Sheets($client);

// Description Query
$desc_range = 'Periodic Table Descriptions!A2:D113';
$desc_resp = $service->spreadsheets_values->get($spreadsheetId, $desc_range);
$desc_els = $desc_resp->getValues();

// Row 1
$r1_el_range = 'Periodic Table Entries!A2:G19';
$r1_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r1_el_range);
$r1_els = $r1_el_resp->getValues();

// Row 2
$r2_el_range = 'Periodic Table Entries!A20:G37';
$r2_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r2_el_range);
$r2_els = $r2_el_resp->getValues();

// Row 3
$r3_el_range = 'Periodic Table Entries!A38:G55';
$r3_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r3_el_range);
$r3_els = $r3_el_resp->getValues();

// Row 4
$r4_el_range = 'Periodic Table Entries!A56:G73';
$r4_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r4_el_range);
$r4_els = $r4_el_resp->getValues();

// Row 5
$r5_el_range = 'Periodic Table Entries!A74:G91';
$r5_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r5_el_range);
$r5_els = $r5_el_resp->getValues();

// Row 6
$r6_el_range = 'Periodic Table Entries!A92:G109';
$r6_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r6_el_range);
$r6_els = $r6_el_resp->getValues();

// Row 7
$r7_el_range = 'Periodic Table Entries!A110:G127';
$r7_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r7_el_range);
$r7_els = $r7_el_resp->getValues();

// Row 8
$r8_el_range = 'Periodic Table Entries!A128:G145';
$r8_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r8_el_range);
$r8_els = $r8_el_resp->getValues();

// Row 9
$r9_el_range = 'Periodic Table Entries!A146:G163';
$r9_el_resp = $service->spreadsheets_values->get($spreadsheetId, $r9_el_range);
$r9_els = $r9_el_resp->getValues();
?>

<!DOCTYPE html>
<html>

<head>
	<title>World War II Periodic Table</title>
	<link rel="stylesheet" href="style-ww2.css?v=<?php echo filemtime('style-ww2.css'); ?>" media="screen, projection" />
	<link rel="stylesheet" href="responsive.css?v=<?php echo filemtime('responsive.css'); ?>" media="screen, projection" />
</head>

<body>
	<main>
		<h2>Franklin D. Roosevelt's Periodic Table</h2>
		<h1>World War II</h1>

		<div class="elements">
			<div class="row row-1">
				<?php
				if (empty($r1_els)) {
					print 'No data found.<br />';
				} else {
					foreach ($r1_els as $row) {
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
						$id  = $row[1];
						$class  = $row[2];
						$title  = $row[4];
						$target = '#' . $id;

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
			<li class="group-map">Major Allied Powers</li>
			<li class="group-kt">Key Terms</li>
			<li class="group-wl">World Leaders</li>
			<li class="group-be">Battles and Events</li>
			<li class="group-hf">Home Front</li>
			<li class="group-mxp">Major Axis Powers</li>
			<li class="group-ml">Military Leaders</li>
			<li class="group-wea">Weapons</li>
			<li class="group-cnf">Conferences</li>
		</ul>

		<div class="rights"><p>Rights:To the best of our knowledge, these images are in the public domain and can be used without further permission.</p></div>

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
					echo '<a href="#" class="back">Return To Table</a>';
					echo "\t\t\t\t" . $desc . "\n";
					echo "\t\t\t" . '</div>' . "\n";
				}
			}
			?>
		</div>
	</main>

	<script type="text/javascript">
		document.getElementsByClassName('back').addEventListener('click', () => {
			history.back();
		});

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