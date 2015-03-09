<?php
	$servername = 'https://' . $_SERVER['SERVER_NAME'];
	$scriptname=end(explode('/',$_SERVER['PHP_SELF']));
	$scriptpath=str_replace($scriptname,'',$_SERVER['PHP_SELF']);
	$launch = $servername . $scriptpath;
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<cartridge_basiclti_link xmlns="http://www.imsglobal.org/xsd/imslticc_v1p0"
	xmlns:blti = "http://www.imsglobal.org/xsd/imsbasiclti_v1p0"
	xmlns:lticm ="http://www.imsglobal.org/xsd/imslticm_v1p0"
	xmlns:lticp ="http://www.imsglobal.org/xsd/imslticp_v1p0"
	xmlns:xsi = "http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation = "http://www.imsglobal.org/xsd/imslticc_v1p0 http://www.imsglobal.org/xsd/lti/ltiv1p0/imslticc_v1p0.xsd
	http://www.imsglobal.org/xsd/imsbasiclti_v1p0 http://www.imsglobal.org/xsd/lti/ltiv1p0/imsbasiclti_v1p0.xsd
	http://www.imsglobal.org/xsd/imslticm_v1p0 http://www.imsglobal.org/xsd/lti/ltiv1p0/imslticm_v1p0.xsd
	http://www.imsglobal.org/xsd/imslticp_v1p0 http://www.imsglobal.org/xsd/lti/ltiv1p0/imslticp_v1p0.xsd">
	<blti:title>UDOIT</blti:title>
	<blti:description>This tool allows you scan your courses and check for common accessibility issues.</blti:description>
	<blti:icon></blti:icon>
	<blti:launch_url><?= $launch ?></blti:launch_url>
	<blti:extensions platform="canvas.instructure.com">
		<lticm:property name="tool_id">udoit</lticm:property>
		<lticm:property name="privacy_level">public</lticm:property>
		<lticm:property name="domain"><?= $_SERVER['SERVER_NAME'] ?></lticm:property>
		<lticm:options name="course_navigation">
			<lticm:property name="url"><?= $launch ?></lticm:property>
			<lticm:property name="default">enabled</lticm:property>
			<lticm:property name="visibility">admins</lticm:property>
			<lticm:property name="text">UDOIT</lticm:property>
			<lticm:property name="enabled">true</lticm:property>
		</lticm:options>
	</blti:extensions>
	<cartridge_bundle identifierref="BLTI001_Bundle"/>
	<cartridge_icon identifierref="BLTI001_Icon"/>
</cartridge_basiclti_link>
