<?php

########################################################################
# Extension Manager/Repository config file for ext "cc_infotablesmgm".
#
# Auto generated 26-01-2011 21:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables Manager',
	'description' => 'Use this module to maintain contents of Static Info Tables and generate the language pack extensions.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.2.0',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'René Fritz',
	'author_email' => 'r.fritz@colorcube.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3-0.0.0',
			'static_info_tables' => '2.2.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:363:{s:32:"class.tx_ccinfotablesmgm_div.php";s:4:"20d4";s:37:"class.tx_ccinfotablesmgm_encoding.php";s:4:"9923";s:12:"ext_icon.gif";s:4:"639f";s:17:"ext_localconf.php";s:4:"a366";s:14:"ext_tables.php";s:4:"9e33";s:14:"ext_tables.sql";s:4:"f190";s:37:"data/cldr-1.3/common/collation/ar.xml";s:4:"7e0f";s:37:"data/cldr-1.3/common/collation/be.xml";s:4:"42d3";s:37:"data/cldr-1.3/common/collation/bg.xml";s:4:"6b9b";s:37:"data/cldr-1.3/common/collation/ca.xml";s:4:"1b1f";s:37:"data/cldr-1.3/common/collation/cs.xml";s:4:"c37d";s:37:"data/cldr-1.3/common/collation/da.xml";s:4:"d4de";s:37:"data/cldr-1.3/common/collation/de.xml";s:4:"27cb";s:37:"data/cldr-1.3/common/collation/dz.xml";s:4:"e811";s:37:"data/cldr-1.3/common/collation/el.xml";s:4:"558d";s:37:"data/cldr-1.3/common/collation/en.xml";s:4:"7143";s:40:"data/cldr-1.3/common/collation/en_BE.xml";s:4:"50d4";s:37:"data/cldr-1.3/common/collation/eo.xml";s:4:"24b1";s:37:"data/cldr-1.3/common/collation/es.xml";s:4:"a15f";s:37:"data/cldr-1.3/common/collation/et.xml";s:4:"e1ed";s:37:"data/cldr-1.3/common/collation/fa.xml";s:4:"7b36";s:40:"data/cldr-1.3/common/collation/fa_AF.xml";s:4:"9b57";s:37:"data/cldr-1.3/common/collation/fi.xml";s:4:"a8cd";s:37:"data/cldr-1.3/common/collation/fo.xml";s:4:"00e3";s:37:"data/cldr-1.3/common/collation/fr.xml";s:4:"5c6e";s:37:"data/cldr-1.3/common/collation/gu.xml";s:4:"908b";s:38:"data/cldr-1.3/common/collation/haw.xml";s:4:"de37";s:37:"data/cldr-1.3/common/collation/he.xml";s:4:"8e56";s:37:"data/cldr-1.3/common/collation/hi.xml";s:4:"9f61";s:37:"data/cldr-1.3/common/collation/hr.xml";s:4:"266f";s:37:"data/cldr-1.3/common/collation/hu.xml";s:4:"777c";s:37:"data/cldr-1.3/common/collation/is.xml";s:4:"0f8c";s:37:"data/cldr-1.3/common/collation/it.xml";s:4:"01dd";s:37:"data/cldr-1.3/common/collation/ja.xml";s:4:"00f4";s:37:"data/cldr-1.3/common/collation/kk.xml";s:4:"8e49";s:37:"data/cldr-1.3/common/collation/kl.xml";s:4:"3902";s:37:"data/cldr-1.3/common/collation/km.xml";s:4:"3dfd";s:37:"data/cldr-1.3/common/collation/kn.xml";s:4:"0414";s:37:"data/cldr-1.3/common/collation/ko.xml";s:4:"439c";s:37:"data/cldr-1.3/common/collation/lt.xml";s:4:"c660";s:37:"data/cldr-1.3/common/collation/lv.xml";s:4:"17ea";s:37:"data/cldr-1.3/common/collation/mk.xml";s:4:"5063";s:37:"data/cldr-1.3/common/collation/ml.xml";s:4:"4fff";s:37:"data/cldr-1.3/common/collation/mr.xml";s:4:"5ee7";s:37:"data/cldr-1.3/common/collation/mt.xml";s:4:"3487";s:37:"data/cldr-1.3/common/collation/nb.xml";s:4:"e069";s:37:"data/cldr-1.3/common/collation/nn.xml";s:4:"39ce";s:37:"data/cldr-1.3/common/collation/om.xml";s:4:"20b9";s:37:"data/cldr-1.3/common/collation/or.xml";s:4:"558c";s:37:"data/cldr-1.3/common/collation/pa.xml";s:4:"6223";s:37:"data/cldr-1.3/common/collation/pl.xml";s:4:"6f8e";s:37:"data/cldr-1.3/common/collation/ps.xml";s:4:"f214";s:37:"data/cldr-1.3/common/collation/ro.xml";s:4:"d28d";s:39:"data/cldr-1.3/common/collation/root.xml";s:4:"3e4a";s:37:"data/cldr-1.3/common/collation/ru.xml";s:4:"2d78";s:37:"data/cldr-1.3/common/collation/sh.xml";s:4:"a4b5";s:37:"data/cldr-1.3/common/collation/sk.xml";s:4:"4222";s:37:"data/cldr-1.3/common/collation/sl.xml";s:4:"94f7";s:37:"data/cldr-1.3/common/collation/sq.xml";s:4:"9ee1";s:37:"data/cldr-1.3/common/collation/sr.xml";s:4:"39fd";s:37:"data/cldr-1.3/common/collation/sv.xml";s:4:"ea55";s:37:"data/cldr-1.3/common/collation/ta.xml";s:4:"783f";s:37:"data/cldr-1.3/common/collation/te.xml";s:4:"8d8d";s:37:"data/cldr-1.3/common/collation/th.xml";s:4:"3961";s:37:"data/cldr-1.3/common/collation/tr.xml";s:4:"41ef";s:37:"data/cldr-1.3/common/collation/uk.xml";s:4:"c387";s:37:"data/cldr-1.3/common/collation/vi.xml";s:4:"0044";s:37:"data/cldr-1.3/common/collation/zh.xml";s:4:"49e8";s:40:"data/cldr-1.3/common/collation/zh_HK.xml";s:4:"dd83";s:42:"data/cldr-1.3/common/collation/zh_Hant.xml";s:4:"c86b";s:40:"data/cldr-1.3/common/collation/zh_MO.xml";s:4:"a60b";s:40:"data/cldr-1.3/common/collation/zh_TW.xml";s:4:"1348";s:32:"data/cldr-1.3/common/main/aa.xml";s:4:"87e3";s:35:"data/cldr-1.3/common/main/aa_DJ.xml";s:4:"afcd";s:35:"data/cldr-1.3/common/main/aa_ER.xml";s:4:"d8ce";s:41:"data/cldr-1.3/common/main/aa_ER_SAAHO.xml";s:4:"2b75";s:35:"data/cldr-1.3/common/main/aa_ET.xml";s:4:"871b";s:32:"data/cldr-1.3/common/main/af.xml";s:4:"09d0";s:35:"data/cldr-1.3/common/main/af_ZA.xml";s:4:"6e01";s:32:"data/cldr-1.3/common/main/am.xml";s:4:"2c72";s:35:"data/cldr-1.3/common/main/am_ET.xml";s:4:"bbe8";s:32:"data/cldr-1.3/common/main/ar.xml";s:4:"55d3";s:35:"data/cldr-1.3/common/main/ar_AE.xml";s:4:"a71d";s:35:"data/cldr-1.3/common/main/ar_BH.xml";s:4:"83dd";s:35:"data/cldr-1.3/common/main/ar_DZ.xml";s:4:"7875";s:35:"data/cldr-1.3/common/main/ar_EG.xml";s:4:"9f69";s:35:"data/cldr-1.3/common/main/ar_IQ.xml";s:4:"1e87";s:35:"data/cldr-1.3/common/main/ar_JO.xml";s:4:"971f";s:35:"data/cldr-1.3/common/main/ar_KW.xml";s:4:"7081";s:35:"data/cldr-1.3/common/main/ar_LB.xml";s:4:"2934";s:35:"data/cldr-1.3/common/main/ar_LY.xml";s:4:"ee9c";s:35:"data/cldr-1.3/common/main/ar_MA.xml";s:4:"286b";s:35:"data/cldr-1.3/common/main/ar_OM.xml";s:4:"6904";s:35:"data/cldr-1.3/common/main/ar_QA.xml";s:4:"e278";s:35:"data/cldr-1.3/common/main/ar_SA.xml";s:4:"baa2";s:35:"data/cldr-1.3/common/main/ar_SD.xml";s:4:"574d";s:35:"data/cldr-1.3/common/main/ar_SY.xml";s:4:"d935";s:35:"data/cldr-1.3/common/main/ar_TN.xml";s:4:"23c9";s:35:"data/cldr-1.3/common/main/ar_YE.xml";s:4:"7001";s:32:"data/cldr-1.3/common/main/as.xml";s:4:"f3e6";s:35:"data/cldr-1.3/common/main/as_IN.xml";s:4:"51fe";s:32:"data/cldr-1.3/common/main/az.xml";s:4:"dd40";s:35:"data/cldr-1.3/common/main/az_AZ.xml";s:4:"199a";s:37:"data/cldr-1.3/common/main/az_Cyrl.xml";s:4:"2ad7";s:40:"data/cldr-1.3/common/main/az_Cyrl_AZ.xml";s:4:"9999";s:37:"data/cldr-1.3/common/main/az_Latn.xml";s:4:"dd96";s:40:"data/cldr-1.3/common/main/az_Latn_AZ.xml";s:4:"73ac";s:32:"data/cldr-1.3/common/main/be.xml";s:4:"6dce";s:35:"data/cldr-1.3/common/main/be_BY.xml";s:4:"b0ea";s:32:"data/cldr-1.3/common/main/bg.xml";s:4:"e0cc";s:35:"data/cldr-1.3/common/main/bg_BG.xml";s:4:"b84e";s:32:"data/cldr-1.3/common/main/bn.xml";s:4:"1046";s:35:"data/cldr-1.3/common/main/bn_IN.xml";s:4:"01e3";s:32:"data/cldr-1.3/common/main/bs.xml";s:4:"8045";s:35:"data/cldr-1.3/common/main/bs_BA.xml";s:4:"3d23";s:33:"data/cldr-1.3/common/main/byn.xml";s:4:"5838";s:36:"data/cldr-1.3/common/main/byn_ER.xml";s:4:"22d4";s:32:"data/cldr-1.3/common/main/ca.xml";s:4:"a43d";s:39:"data/cldr-1.3/common/main/ca.xml.#.1.34";s:4:"fc62";s:35:"data/cldr-1.3/common/main/ca_ES.xml";s:4:"e28e";s:42:"data/cldr-1.3/common/main/ca_ES.xml.#.1.22";s:4:"4cb9";s:32:"data/cldr-1.3/common/main/cs.xml";s:4:"9c65";s:35:"data/cldr-1.3/common/main/cs_CZ.xml";s:4:"7df4";s:32:"data/cldr-1.3/common/main/cy.xml";s:4:"99f6";s:35:"data/cldr-1.3/common/main/cy_GB.xml";s:4:"9ae9";s:32:"data/cldr-1.3/common/main/da.xml";s:4:"ce68";s:35:"data/cldr-1.3/common/main/da_DK.xml";s:4:"f611";s:32:"data/cldr-1.3/common/main/de.xml";s:4:"b78b";s:35:"data/cldr-1.3/common/main/de_AT.xml";s:4:"7cf1";s:35:"data/cldr-1.3/common/main/de_BE.xml";s:4:"5c30";s:35:"data/cldr-1.3/common/main/de_CH.xml";s:4:"c56a";s:35:"data/cldr-1.3/common/main/de_DE.xml";s:4:"43f9";s:35:"data/cldr-1.3/common/main/de_LI.xml";s:4:"3b7e";s:35:"data/cldr-1.3/common/main/de_LU.xml";s:4:"1d08";s:32:"data/cldr-1.3/common/main/dv.xml";s:4:"063b";s:35:"data/cldr-1.3/common/main/dv_MV.xml";s:4:"1b18";s:32:"data/cldr-1.3/common/main/dz.xml";s:4:"93c0";s:35:"data/cldr-1.3/common/main/dz_BT.xml";s:4:"6f2e";s:32:"data/cldr-1.3/common/main/el.xml";s:4:"22be";s:35:"data/cldr-1.3/common/main/el_CY.xml";s:4:"893b";s:35:"data/cldr-1.3/common/main/el_GR.xml";s:4:"843c";s:41:"data/cldr-1.3/common/main/el_POLYTONI.xml";s:4:"e935";s:32:"data/cldr-1.3/common/main/en.xml";s:4:"071b";s:35:"data/cldr-1.3/common/main/en_AS.xml";s:4:"c63e";s:35:"data/cldr-1.3/common/main/en_AU.xml";s:4:"dbe5";s:35:"data/cldr-1.3/common/main/en_BE.xml";s:4:"e52e";s:35:"data/cldr-1.3/common/main/en_BW.xml";s:4:"d6da";s:35:"data/cldr-1.3/common/main/en_BZ.xml";s:4:"3c77";s:35:"data/cldr-1.3/common/main/en_CA.xml";s:4:"31b3";s:35:"data/cldr-1.3/common/main/en_GB.xml";s:4:"874d";s:35:"data/cldr-1.3/common/main/en_GU.xml";s:4:"7d37";s:35:"data/cldr-1.3/common/main/en_HK.xml";s:4:"c8ff";s:35:"data/cldr-1.3/common/main/en_IE.xml";s:4:"4d8b";s:35:"data/cldr-1.3/common/main/en_IN.xml";s:4:"0888";s:35:"data/cldr-1.3/common/main/en_JM.xml";s:4:"041f";s:35:"data/cldr-1.3/common/main/en_MH.xml";s:4:"466b";s:35:"data/cldr-1.3/common/main/en_MP.xml";s:4:"8340";s:35:"data/cldr-1.3/common/main/en_MT.xml";s:4:"67bf";s:35:"data/cldr-1.3/common/main/en_NZ.xml";s:4:"a559";s:35:"data/cldr-1.3/common/main/en_PH.xml";s:4:"fa70";s:35:"data/cldr-1.3/common/main/en_PK.xml";s:4:"eb08";s:35:"data/cldr-1.3/common/main/en_SG.xml";s:4:"e01e";s:35:"data/cldr-1.3/common/main/en_TT.xml";s:4:"b8ac";s:35:"data/cldr-1.3/common/main/en_UM.xml";s:4:"88d0";s:35:"data/cldr-1.3/common/main/en_US.xml";s:4:"b719";s:41:"data/cldr-1.3/common/main/en_US_POSIX.xml";s:4:"2659";s:35:"data/cldr-1.3/common/main/en_VI.xml";s:4:"b7f9";s:35:"data/cldr-1.3/common/main/en_ZA.xml";s:4:"11fe";s:35:"data/cldr-1.3/common/main/en_ZW.xml";s:4:"8baf";s:32:"data/cldr-1.3/common/main/eo.xml";s:4:"7203";s:32:"data/cldr-1.3/common/main/es.xml";s:4:"e045";s:35:"data/cldr-1.3/common/main/es_AR.xml";s:4:"add1";s:35:"data/cldr-1.3/common/main/es_BO.xml";s:4:"da7e";s:35:"data/cldr-1.3/common/main/es_CL.xml";s:4:"2845";s:35:"data/cldr-1.3/common/main/es_CO.xml";s:4:"edeb";s:35:"data/cldr-1.3/common/main/es_CR.xml";s:4:"5982";s:35:"data/cldr-1.3/common/main/es_DO.xml";s:4:"c0e5";s:35:"data/cldr-1.3/common/main/es_EC.xml";s:4:"f4f1";s:35:"data/cldr-1.3/common/main/es_ES.xml";s:4:"aec3";s:35:"data/cldr-1.3/common/main/es_GT.xml";s:4:"ca80";s:35:"data/cldr-1.3/common/main/es_HN.xml";s:4:"dea6";s:35:"data/cldr-1.3/common/main/es_MX.xml";s:4:"9207";s:35:"data/cldr-1.3/common/main/es_NI.xml";s:4:"07db";s:35:"data/cldr-1.3/common/main/es_PA.xml";s:4:"bca2";s:35:"data/cldr-1.3/common/main/es_PE.xml";s:4:"af12";s:35:"data/cldr-1.3/common/main/es_PR.xml";s:4:"a022";s:35:"data/cldr-1.3/common/main/es_PY.xml";s:4:"66b0";s:35:"data/cldr-1.3/common/main/es_SV.xml";s:4:"ba52";s:35:"data/cldr-1.3/common/main/es_US.xml";s:4:"9667";s:35:"data/cldr-1.3/common/main/es_UY.xml";s:4:"a1c0";s:35:"data/cldr-1.3/common/main/es_VE.xml";s:4:"88b0";s:32:"data/cldr-1.3/common/main/et.xml";s:4:"786a";s:35:"data/cldr-1.3/common/main/et_EE.xml";s:4:"960f";s:32:"data/cldr-1.3/common/main/eu.xml";s:4:"7c5b";s:35:"data/cldr-1.3/common/main/eu_ES.xml";s:4:"df80";s:32:"data/cldr-1.3/common/main/fa.xml";s:4:"8b3f";s:35:"data/cldr-1.3/common/main/fa_AF.xml";s:4:"c508";s:35:"data/cldr-1.3/common/main/fa_IR.xml";s:4:"88ff";s:32:"data/cldr-1.3/common/main/fi.xml";s:4:"98cd";s:35:"data/cldr-1.3/common/main/fi_FI.xml";s:4:"851d";s:32:"data/cldr-1.3/common/main/fo.xml";s:4:"eb27";s:35:"data/cldr-1.3/common/main/fo_FO.xml";s:4:"febc";s:32:"data/cldr-1.3/common/main/fr.xml";s:4:"5fbb";s:39:"data/cldr-1.3/common/main/fr.xml.#.1.40";s:4:"e6f9";s:35:"data/cldr-1.3/common/main/fr_BE.xml";s:4:"0c9f";s:35:"data/cldr-1.3/common/main/fr_CA.xml";s:4:"1131";s:35:"data/cldr-1.3/common/main/fr_CH.xml";s:4:"ff63";s:35:"data/cldr-1.3/common/main/fr_FR.xml";s:4:"420e";s:35:"data/cldr-1.3/common/main/fr_LU.xml";s:4:"7977";s:35:"data/cldr-1.3/common/main/fr_MC.xml";s:4:"3cfc";s:32:"data/cldr-1.3/common/main/ga.xml";s:4:"cb66";s:35:"data/cldr-1.3/common/main/ga_IE.xml";s:4:"5b57";s:33:"data/cldr-1.3/common/main/gez.xml";s:4:"d087";s:36:"data/cldr-1.3/common/main/gez_ER.xml";s:4:"8e2b";s:36:"data/cldr-1.3/common/main/gez_ET.xml";s:4:"6027";s:32:"data/cldr-1.3/common/main/gl.xml";s:4:"5dc7";s:35:"data/cldr-1.3/common/main/gl_ES.xml";s:4:"567e";s:32:"data/cldr-1.3/common/main/gu.xml";s:4:"42f3";s:35:"data/cldr-1.3/common/main/gu_IN.xml";s:4:"934f";s:32:"data/cldr-1.3/common/main/gv.xml";s:4:"15c8";s:35:"data/cldr-1.3/common/main/gv_GB.xml";s:4:"527d";s:33:"data/cldr-1.3/common/main/haw.xml";s:4:"85b4";s:36:"data/cldr-1.3/common/main/haw_US.xml";s:4:"1e82";s:32:"data/cldr-1.3/common/main/he.xml";s:4:"19ba";s:35:"data/cldr-1.3/common/main/he_IL.xml";s:4:"c45f";s:32:"data/cldr-1.3/common/main/hi.xml";s:4:"39e0";s:35:"data/cldr-1.3/common/main/hi_IN.xml";s:4:"1656";s:32:"data/cldr-1.3/common/main/hr.xml";s:4:"be33";s:35:"data/cldr-1.3/common/main/hr_HR.xml";s:4:"7149";s:32:"data/cldr-1.3/common/main/hu.xml";s:4:"1ac7";s:35:"data/cldr-1.3/common/main/hu_HU.xml";s:4:"7b89";s:32:"data/cldr-1.3/common/main/hy.xml";s:4:"a820";s:35:"data/cldr-1.3/common/main/hy_AM.xml";s:4:"69a3";s:43:"data/cldr-1.3/common/main/hy_AM_REVISED.xml";s:4:"0219";s:32:"data/cldr-1.3/common/main/id.xml";s:4:"4119";s:35:"data/cldr-1.3/common/main/id_ID.xml";s:4:"7948";s:32:"data/cldr-1.3/common/main/is.xml";s:4:"0023";s:35:"data/cldr-1.3/common/main/is_IS.xml";s:4:"824d";s:32:"data/cldr-1.3/common/main/it.xml";s:4:"933d";s:35:"data/cldr-1.3/common/main/it_CH.xml";s:4:"cfea";s:35:"data/cldr-1.3/common/main/it_IT.xml";s:4:"e1de";s:32:"data/cldr-1.3/common/main/iu.xml";s:4:"6126";s:32:"data/cldr-1.3/common/main/ja.xml";s:4:"4831";s:35:"data/cldr-1.3/common/main/ja_JP.xml";s:4:"6f7b";s:32:"data/cldr-1.3/common/main/ka.xml";s:4:"3225";s:35:"data/cldr-1.3/common/main/ka_GE.xml";s:4:"1be3";s:32:"data/cldr-1.3/common/main/kk.xml";s:4:"a49d";s:35:"data/cldr-1.3/common/main/kk_KZ.xml";s:4:"9e0b";s:32:"data/cldr-1.3/common/main/kl.xml";s:4:"5e55";s:35:"data/cldr-1.3/common/main/kl_GL.xml";s:4:"1ad5";s:32:"data/cldr-1.3/common/main/km.xml";s:4:"8b4f";s:35:"data/cldr-1.3/common/main/km_KH.xml";s:4:"12f7";s:32:"data/cldr-1.3/common/main/kn.xml";s:4:"b450";s:35:"data/cldr-1.3/common/main/kn_IN.xml";s:4:"8806";s:32:"data/cldr-1.3/common/main/ko.xml";s:4:"7cef";s:35:"data/cldr-1.3/common/main/ko_KR.xml";s:4:"1f8e";s:33:"data/cldr-1.3/common/main/kok.xml";s:4:"6a62";s:36:"data/cldr-1.3/common/main/kok_IN.xml";s:4:"5245";s:32:"data/cldr-1.3/common/main/kw.xml";s:4:"433e";s:35:"data/cldr-1.3/common/main/kw_GB.xml";s:4:"9c17";s:32:"data/cldr-1.3/common/main/ky.xml";s:4:"95e2";s:35:"data/cldr-1.3/common/main/ky_KG.xml";s:4:"a56d";s:32:"data/cldr-1.3/common/main/lo.xml";s:4:"062e";s:35:"data/cldr-1.3/common/main/lo_LA.xml";s:4:"6ae0";s:33:"data/cldr-1.3/common/main/log.txt";s:4:"d41d";s:32:"data/cldr-1.3/common/main/lt.xml";s:4:"64ea";s:35:"data/cldr-1.3/common/main/lt_LT.xml";s:4:"d964";s:32:"data/cldr-1.3/common/main/lv.xml";s:4:"e03a";s:35:"data/cldr-1.3/common/main/lv_LV.xml";s:4:"f873";s:32:"data/cldr-1.3/common/main/mk.xml";s:4:"2a54";s:35:"data/cldr-1.3/common/main/mk_MK.xml";s:4:"bfc8";s:32:"data/cldr-1.3/common/main/ml.xml";s:4:"3dfc";s:35:"data/cldr-1.3/common/main/ml_IN.xml";s:4:"9f67";s:32:"data/cldr-1.3/common/main/mn.xml";s:4:"0d19";s:35:"data/cldr-1.3/common/main/mn_MN.xml";s:4:"cda5";s:32:"data/cldr-1.3/common/main/mr.xml";s:4:"c471";s:35:"data/cldr-1.3/common/main/mr_IN.xml";s:4:"0eda";s:32:"data/cldr-1.3/common/main/ms.xml";s:4:"94e1";s:35:"data/cldr-1.3/common/main/ms_BN.xml";s:4:"e494";s:35:"data/cldr-1.3/common/main/ms_MY.xml";s:4:"dd3e";s:32:"data/cldr-1.3/common/main/mt.xml";s:4:"ac65";s:35:"data/cldr-1.3/common/main/mt_MT.xml";s:4:"4534";s:32:"data/cldr-1.3/common/main/nb.xml";s:4:"e835";s:35:"data/cldr-1.3/common/main/nb_NO.xml";s:4:"b6df";s:32:"data/cldr-1.3/common/main/nl.xml";s:4:"399d";s:35:"data/cldr-1.3/common/main/nl_BE.xml";s:4:"6d29";s:35:"data/cldr-1.3/common/main/nl_NL.xml";s:4:"5975";s:32:"data/cldr-1.3/common/main/nn.xml";s:4:"27d5";s:35:"data/cldr-1.3/common/main/nn_NO.xml";s:4:"274d";s:32:"data/cldr-1.3/common/main/om.xml";s:4:"fb3b";s:35:"data/cldr-1.3/common/main/om_ET.xml";s:4:"099b";s:35:"data/cldr-1.3/common/main/om_KE.xml";s:4:"973e";s:32:"data/cldr-1.3/common/main/or.xml";s:4:"6dbb";s:35:"data/cldr-1.3/common/main/or_IN.xml";s:4:"b398";s:32:"data/cldr-1.3/common/main/pa.xml";s:4:"ef96";s:35:"data/cldr-1.3/common/main/pa_IN.xml";s:4:"220e";s:32:"data/cldr-1.3/common/main/pl.xml";s:4:"7128";s:35:"data/cldr-1.3/common/main/pl_PL.xml";s:4:"a8d0";s:32:"data/cldr-1.3/common/main/ps.xml";s:4:"eb8b";s:35:"data/cldr-1.3/common/main/ps_AF.xml";s:4:"09e0";s:32:"data/cldr-1.3/common/main/pt.xml";s:4:"deaf";s:35:"data/cldr-1.3/common/main/pt_BR.xml";s:4:"a7e8";s:35:"data/cldr-1.3/common/main/pt_PT.xml";s:4:"a1b2";s:32:"data/cldr-1.3/common/main/ro.xml";s:4:"a2dd";s:35:"data/cldr-1.3/common/main/ro_RO.xml";s:4:"29c4";s:34:"data/cldr-1.3/common/main/root.xml";s:4:"fd9d";s:32:"data/cldr-1.3/common/main/ru.xml";s:4:"164f";s:35:"data/cldr-1.3/common/main/ru_RU.xml";s:4:"4f03";s:35:"data/cldr-1.3/common/main/ru_UA.xml";s:4:"1de9";s:32:"data/cldr-1.3/common/main/sa.xml";s:4:"e1be";s:35:"data/cldr-1.3/common/main/sa_IN.xml";s:4:"d579";s:32:"data/cldr-1.3/common/main/sh.xml";s:4:"7c40";s:35:"data/cldr-1.3/common/main/sh_BA.xml";s:4:"3c9e";s:35:"data/cldr-1.3/common/main/sh_CS.xml";s:4:"4eba";s:35:"data/cldr-1.3/common/main/sh_YU.xml";s:4:"2ef7";s:33:"data/cldr-1.3/common/main/sid.xml";s:4:"2985";s:36:"data/cldr-1.3/common/main/sid_ET.xml";s:4:"6fd6";s:32:"data/cldr-1.3/common/main/sk.xml";s:4:"b9b4";s:35:"data/cldr-1.3/common/main/sk_SK.xml";s:4:"6dc8";s:32:"data/cldr-1.3/common/main/sl.xml";s:4:"d791";s:35:"data/cldr-1.3/common/main/sl_SI.xml";s:4:"5cff";s:32:"data/cldr-1.3/common/main/so.xml";s:4:"56b9";s:35:"data/cldr-1.3/common/main/so_DJ.xml";s:4:"8ff8";s:35:"data/cldr-1.3/common/main/so_ET.xml";s:4:"b8c8";s:35:"data/cldr-1.3/common/main/so_KE.xml";s:4:"69bf";s:35:"data/cldr-1.3/common/main/so_SO.xml";s:4:"2472";s:32:"data/cldr-1.3/common/main/sq.xml";s:4:"0924";s:35:"data/cldr-1.3/common/main/sq_AL.xml";s:4:"662b";s:32:"data/cldr-1.3/common/main/sr.xml";s:4:"8eaf";s:35:"data/cldr-1.3/common/main/sr_BA.xml";s:4:"dbe5";s:35:"data/cldr-1.3/common/main/sr_CS.xml";s:4:"d8be";s:37:"data/cldr-1.3/common/main/sr_Cyrl.xml";s:4:"43de";s:40:"data/cldr-1.3/common/main/sr_Cyrl_BA.xml";s:4:"03b3";s:40:"data/cldr-1.3/common/main/sr_Cyrl_CS.xml";s:4:"811f";s:40:"data/cldr-1.3/common/main/sr_Cyrl_YU.xml";s:4:"83a9";s:37:"data/cldr-1.3/common/main/sr_Latn.xml";s:4:"e7e5";s:40:"data/cldr-1.3/common/main/sr_Latn_BA.xml";s:4:"84e9";s:40:"data/cldr-1.3/common/main/sr_Latn_CS.xml";s:4:"780b";s:48:"data/cldr-1.3/common/supplemental/characters.xml";s:4:"d1da";s:54:"data/cldr-1.3/common/supplemental/supplementalData.xml";s:4:"1603";s:32:"data/cldr-1.3/dtd/characters.dtd";s:4:"99d1";s:30:"data/cldr-1.3/dtd/cldrTest.dtd";s:4:"7688";s:26:"data/cldr-1.3/dtd/ldml.dtd";s:4:"2838";s:30:"data/cldr-1.3/dtd/ldmlICIR.dtd";s:4:"e948";s:29:"data/cldr-1.3/dtd/ldmlICU.dtd";s:4:"9efe";s:36:"data/cldr-1.3/dtd/ldmlOpenOffice.dtd";s:4:"ba26";s:38:"data/cldr-1.3/dtd/ldmlSupplemental.dtd";s:4:"2c7b";s:14:"doc/manual.sxw";s:4:"1cfb";s:40:"mod1/class.tx_ccinfotablesmgm_emfunc.php";s:4:"f97f";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"47f2";s:14:"mod1/index.php";s:4:"8440";s:18:"mod1/locallang.xml";s:4:"0c98";s:22:"mod1/locallang_mod.xml";s:4:"45ad";s:19:"mod1/moduleicon.gif";s:4:"2556";s:57:"res/static_info_tables_lang_template/class.ext_update.php";s:4:"b796";s:58:"res/static_info_tables_lang_template/ext_conf_template.txt";s:4:"7de5";s:51:"res/static_info_tables_lang_template/ext_emconf.php";s:4:"8927";s:49:"res/static_info_tables_lang_template/ext_icon.gif";s:4:"639f";s:51:"res/static_info_tables_lang_template/ext_tables.php";s:4:"4429";s:51:"res/static_info_tables_lang_template/ext_tables.sql";s:4:"2126";s:65:"res/static_info_tables_lang_template/ext_tables_static_update.sql";s:4:"5cbf";s:53:"res/static_info_tables_lang_template/locallang_db.xml";s:4:"ccd3";}',
);

?>