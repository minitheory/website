for(var i = 0; i < 277; i++) { var scriptId = 'u' + i; window[scriptId] = document.getElementById(scriptId); }

$axure.eventManager.pageLoad(
function (e) {

if (true) {

SetWidgetSelected('u260');
}

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelState('u0', 'pd1u0','none','',500,'none','',500);

}

if (true) {

}

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelVisibility('u264','','none',500);

}

});

widgetIdToShowFunction['u31'] = function() {
var e = windowEvent;

if (true) {

}

}

widgetIdToHideFunction['u31'] = function() {
var e = windowEvent;

if (true) {

}

}
document.getElementById('u231_img').tabIndex = 0;

u231.style.cursor = 'pointer';
$axure.eventManager.click('u231', function(e) {

if (true) {

	SetPanelVisibility('u230','hidden','none',500);

}
});
gv_vAlignTable['u232'] = 'center';gv_vAlignTable['u100'] = 'center';gv_vAlignTable['u102'] = 'center';gv_vAlignTable['u104'] = 'center';gv_vAlignTable['u106'] = 'center';gv_vAlignTable['u108'] = 'center';
u258.style.cursor = 'pointer';
$axure.eventManager.click('u258', function(e) {

if (true) {

	SetPanelVisibility('u230','hidden','none',500);

}
});
gv_vAlignTable['u259'] = 'top';gv_vAlignTable['u80'] = 'center';gv_vAlignTable['u82'] = 'center';gv_vAlignTable['u84'] = 'center';gv_vAlignTable['u86'] = 'center';gv_vAlignTable['u88'] = 'center';gv_vAlignTable['u118'] = 'center';gv_vAlignTable['u268'] = 'center';document.getElementById('u269_img').tabIndex = 0;

u269.style.cursor = 'pointer';
$axure.eventManager.click('u269', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u90'] = 'center';gv_vAlignTable['u92'] = 'center';gv_vAlignTable['u94'] = 'center';gv_vAlignTable['u96'] = 'center';gv_vAlignTable['u98'] = 'center';gv_vAlignTable['u128'] = 'center';gv_vAlignTable['u130'] = 'center';gv_vAlignTable['u132'] = 'center';gv_vAlignTable['u134'] = 'center';gv_vAlignTable['u136'] = 'center';gv_vAlignTable['u138'] = 'center';gv_vAlignTable['u140'] = 'center';gv_vAlignTable['u142'] = 'center';gv_vAlignTable['u144'] = 'center';gv_vAlignTable['u146'] = 'center';gv_vAlignTable['u148'] = 'center';gv_vAlignTable['u275'] = 'top';gv_vAlignTable['u276'] = 'top';gv_vAlignTable['u150'] = 'center';gv_vAlignTable['u152'] = 'center';gv_vAlignTable['u154'] = 'center';gv_vAlignTable['u156'] = 'center';gv_vAlignTable['u158'] = 'center';gv_vAlignTable['u234'] = 'center';gv_vAlignTable['u235'] = 'top';gv_vAlignTable['u160'] = 'center';gv_vAlignTable['u162'] = 'center';gv_vAlignTable['u164'] = 'center';gv_vAlignTable['u166'] = 'center';gv_vAlignTable['u168'] = 'center';gv_vAlignTable['u170'] = 'center';gv_vAlignTable['u172'] = 'center';gv_vAlignTable['u174'] = 'center';gv_vAlignTable['u176'] = 'center';gv_vAlignTable['u178'] = 'center';gv_vAlignTable['u251'] = 'top';gv_vAlignTable['u252'] = 'top';gv_vAlignTable['u253'] = 'top';gv_vAlignTable['u200'] = 'center';gv_vAlignTable['u72'] = 'center';gv_vAlignTable['u74'] = 'center';gv_vAlignTable['u76'] = 'center';gv_vAlignTable['u78'] = 'center';gv_vAlignTable['u180'] = 'center';gv_vAlignTable['u182'] = 'center';gv_vAlignTable['u184'] = 'center';gv_vAlignTable['u186'] = 'center';gv_vAlignTable['u188'] = 'center';document.getElementById('u260_img').tabIndex = 0;

u260.style.cursor = 'pointer';
$axure.eventManager.click('u260', function(e) {

if (true) {

    self.location.href="resources/reload.html#" + encodeURI($axure.globalVariableProvider.getLinkUrl($axure.pageData.url));

}
});
document.getElementById('u262_img').tabIndex = 0;

u262.style.cursor = 'pointer';
$axure.eventManager.click('u262', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Price_History.html');

}
});
gv_vAlignTable['u210'] = 'center';gv_vAlignTable['u212'] = 'center';gv_vAlignTable['u214'] = 'top';gv_vAlignTable['u190'] = 'center';gv_vAlignTable['u192'] = 'center';gv_vAlignTable['u194'] = 'center';gv_vAlignTable['u196'] = 'center';gv_vAlignTable['u198'] = 'center';gv_vAlignTable['u221'] = 'top';gv_vAlignTable['u223'] = 'top';u225.tabIndex = 0;

u225.style.cursor = 'pointer';
$axure.eventManager.click('u225', function(e) {

if (true) {

	SetPanelVisibility('u31','','none',500);

	SetPanelVisibility('u226','','none',500);

}
});
gv_vAlignTable['u2'] = 'center';document.getElementById('u3_img').tabIndex = 0;

u3.style.cursor = 'pointer';
$axure.eventManager.click('u3', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u4'] = 'center';document.getElementById('u5_img').tabIndex = 0;

u5.style.cursor = 'pointer';
$axure.eventManager.click('u5', function(e) {

if (true) {

SetGlobalVariableValue('LoggedIn', 'false');

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u6'] = 'center';gv_vAlignTable['u8'] = 'top';gv_vAlignTable['u240'] = 'top';gv_vAlignTable['u243'] = 'center';gv_vAlignTable['u244'] = 'top';gv_vAlignTable['u245'] = 'top';gv_vAlignTable['u10'] = 'center';gv_vAlignTable['u12'] = 'center';document.getElementById('u13_img').tabIndex = 0;

u13.style.cursor = 'pointer';
$axure.eventManager.click('u13', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Search_results.html');

}
});
gv_vAlignTable['u14'] = 'center';gv_vAlignTable['u17'] = 'center';document.getElementById('u18_img').tabIndex = 0;

u18.style.cursor = 'pointer';
$axure.eventManager.click('u18', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u19'] = 'center';gv_vAlignTable['u110'] = 'center';gv_vAlignTable['u112'] = 'center';gv_vAlignTable['u114'] = 'center';gv_vAlignTable['u250'] = 'top';gv_vAlignTable['u116'] = 'center';gv_vAlignTable['u254'] = 'top';gv_vAlignTable['u255'] = 'top';gv_vAlignTable['u256'] = 'top';document.getElementById('u20_img').tabIndex = 0;

u20.style.cursor = 'pointer';
$axure.eventManager.click('u20', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Login_Page.html');

}
});
gv_vAlignTable['u21'] = 'center';gv_vAlignTable['u23'] = 'top';document.getElementById('u24_img').tabIndex = 0;

u24.style.cursor = 'pointer';
$axure.eventManager.click('u24', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Search_results.html');

}
});
gv_vAlignTable['u25'] = 'center';gv_vAlignTable['u29'] = 'center';gv_vAlignTable['u206'] = 'center';gv_vAlignTable['u208'] = 'center';gv_vAlignTable['u120'] = 'center';gv_vAlignTable['u122'] = 'center';gv_vAlignTable['u124'] = 'center';gv_vAlignTable['u261'] = 'center';gv_vAlignTable['u126'] = 'center';gv_vAlignTable['u263'] = 'center';document.getElementById('u265_img').tabIndex = 0;

u265.style.cursor = 'pointer';
$axure.eventManager.click('u265', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Account.html');

}
});
gv_vAlignTable['u33'] = 'center';gv_vAlignTable['u34'] = 'top';
u35.style.cursor = 'pointer';
$axure.eventManager.click('u35', function(e) {

if (true) {

	SetPanelVisibility('u31','hidden','none',500);

}
});
gv_vAlignTable['u38'] = 'center';gv_vAlignTable['u216'] = 'top';gv_vAlignTable['u217'] = 'top';gv_vAlignTable['u219'] = 'top';gv_vAlignTable['u202'] = 'center';gv_vAlignTable['u266'] = 'center';document.getElementById('u267_img').tabIndex = 0;

u267.style.cursor = 'pointer';
$axure.eventManager.click('u267', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Now_Bidding.html');

}
});
gv_vAlignTable['u204'] = 'center';gv_vAlignTable['u270'] = 'center';gv_vAlignTable['u273'] = 'top';gv_vAlignTable['u40'] = 'center';gv_vAlignTable['u42'] = 'center';document.getElementById('u43_img').tabIndex = 0;

u43.style.cursor = 'pointer';
$axure.eventManager.click('u43', function(e) {

if (true) {

	SetPanelState('u36', 'pd0u36','none','',500,'none','',500);

}
});
gv_vAlignTable['u44'] = 'center';document.getElementById('u45_img').tabIndex = 0;

u45.style.cursor = 'pointer';
$axure.eventManager.click('u45', function(e) {

if (true) {

	SetPanelState('u36', 'pd1u36','none','',500,'none','',500);

}
});
gv_vAlignTable['u46'] = 'center';gv_vAlignTable['u48'] = 'center';gv_vAlignTable['u49'] = 'top';gv_vAlignTable['u228'] = 'center';u229.tabIndex = 0;

u229.style.cursor = 'pointer';
$axure.eventManager.click('u229', function(e) {

if (true) {

	SetPanelVisibility('u226','hidden','none',500);

	SetPanelVisibility('u31','hidden','none',500);

}
});
gv_vAlignTable['u50'] = 'top';gv_vAlignTable['u51'] = 'top';gv_vAlignTable['u53'] = 'top';gv_vAlignTable['u54'] = 'top';gv_vAlignTable['u55'] = 'top';gv_vAlignTable['u56'] = 'top';gv_vAlignTable['u57'] = 'top';gv_vAlignTable['u58'] = 'top';gv_vAlignTable['u237'] = 'center';gv_vAlignTable['u239'] = 'top';gv_vAlignTable['u60'] = 'center';gv_vAlignTable['u62'] = 'center';gv_vAlignTable['u63'] = 'top';gv_vAlignTable['u65'] = 'center';document.getElementById('u66_img').tabIndex = 0;

u66.style.cursor = 'pointer';
$axure.eventManager.click('u66', function(e) {

if (true) {

}
});
gv_vAlignTable['u67'] = 'center';gv_vAlignTable['u69'] = 'center';gv_vAlignTable['u246'] = 'top';gv_vAlignTable['u247'] = 'top';gv_vAlignTable['u248'] = 'top';gv_vAlignTable['u249'] = 'top';