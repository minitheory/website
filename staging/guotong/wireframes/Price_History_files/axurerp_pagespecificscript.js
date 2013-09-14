for(var i = 0; i < 259; i++) { var scriptId = 'u' + i; window[scriptId] = document.getElementById(scriptId); }

$axure.eventManager.pageLoad(
function (e) {

if (true) {

SetWidgetSelected('u210');
}

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelState('u0', 'pd1u0','none','',500,'none','',500);

}

if (true) {

}

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelVisibility('u212','','none',500);

}

});

widgetIdToShowFunction['u172'] = function() {
var e = windowEvent;

if (true) {

}

}

widgetIdToHideFunction['u172'] = function() {
var e = windowEvent;

if (true) {

}

}
gv_vAlignTable['u231'] = 'center';gv_vAlignTable['u233'] = 'top';gv_vAlignTable['u70'] = 'center';gv_vAlignTable['u100'] = 'center';gv_vAlignTable['u102'] = 'center';gv_vAlignTable['u104'] = 'center';gv_vAlignTable['u106'] = 'center';gv_vAlignTable['u108'] = 'center';gv_vAlignTable['u258'] = 'top';gv_vAlignTable['u80'] = 'center';gv_vAlignTable['u82'] = 'center';gv_vAlignTable['u84'] = 'center';gv_vAlignTable['u86'] = 'center';gv_vAlignTable['u88'] = 'center';gv_vAlignTable['u118'] = 'center';gv_vAlignTable['u90'] = 'center';gv_vAlignTable['u92'] = 'center';gv_vAlignTable['u94'] = 'center';gv_vAlignTable['u96'] = 'center';gv_vAlignTable['u98'] = 'center';gv_vAlignTable['u128'] = 'center';gv_vAlignTable['u130'] = 'center';gv_vAlignTable['u132'] = 'center';gv_vAlignTable['u134'] = 'center';gv_vAlignTable['u136'] = 'center';gv_vAlignTable['u138'] = 'center';gv_vAlignTable['u140'] = 'center';gv_vAlignTable['u142'] = 'center';gv_vAlignTable['u144'] = 'center';gv_vAlignTable['u146'] = 'center';gv_vAlignTable['u148'] = 'center';gv_vAlignTable['u150'] = 'center';gv_vAlignTable['u152'] = 'center';gv_vAlignTable['u154'] = 'center';gv_vAlignTable['u156'] = 'center';gv_vAlignTable['u158'] = 'top';gv_vAlignTable['u234'] = 'top';gv_vAlignTable['u160'] = 'top';gv_vAlignTable['u161'] = 'top';gv_vAlignTable['u163'] = 'top';gv_vAlignTable['u165'] = 'top';gv_vAlignTable['u167'] = 'top';gv_vAlignTable['u170'] = 'center';gv_vAlignTable['u174'] = 'center';gv_vAlignTable['u175'] = 'top';
u176.style.cursor = 'pointer';
$axure.eventManager.click('u176', function(e) {

if (true) {

	SetPanelVisibility('u172','hidden','none',500);

}
});
gv_vAlignTable['u179'] = 'center';
u252.style.cursor = 'pointer';
$axure.eventManager.click('u252', function(e) {

if (true) {

	SetPanelVisibility('u224','hidden','none',500);

}
});
gv_vAlignTable['u253'] = 'top';gv_vAlignTable['u72'] = 'center';gv_vAlignTable['u74'] = 'center';gv_vAlignTable['u76'] = 'center';gv_vAlignTable['u78'] = 'center';gv_vAlignTable['u181'] = 'center';gv_vAlignTable['u183'] = 'center';document.getElementById('u184_img').tabIndex = 0;

u184.style.cursor = 'pointer';
$axure.eventManager.click('u184', function(e) {

if (true) {

	SetPanelState('u177', 'pd0u177','none','',500,'none','',500);

}
});
gv_vAlignTable['u185'] = 'center';document.getElementById('u186_img').tabIndex = 0;

u186.style.cursor = 'pointer';
$axure.eventManager.click('u186', function(e) {

if (true) {

	SetPanelState('u177', 'pd1u177','none','',500,'none','',500);

}
});
gv_vAlignTable['u187'] = 'center';gv_vAlignTable['u189'] = 'center';document.getElementById('u210_img').tabIndex = 0;

u210.style.cursor = 'pointer';
$axure.eventManager.click('u210', function(e) {

if (true) {

    self.location.href="resources/reload.html#" + encodeURI($axure.globalVariableProvider.getLinkUrl($axure.pageData.url));

}
});
gv_vAlignTable['u211'] = 'center';document.getElementById('u213_img').tabIndex = 0;

u213.style.cursor = 'pointer';
$axure.eventManager.click('u213', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Account.html');

}
});
gv_vAlignTable['u214'] = 'center';document.getElementById('u215_img').tabIndex = 0;

u215.style.cursor = 'pointer';
$axure.eventManager.click('u215', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Now_Bidding.html');

}
});
gv_vAlignTable['u190'] = 'top';gv_vAlignTable['u191'] = 'top';gv_vAlignTable['u192'] = 'top';gv_vAlignTable['u194'] = 'top';gv_vAlignTable['u195'] = 'top';gv_vAlignTable['u196'] = 'top';gv_vAlignTable['u197'] = 'top';gv_vAlignTable['u198'] = 'top';gv_vAlignTable['u199'] = 'top';gv_vAlignTable['u222'] = 'center';u223.tabIndex = 0;

u223.style.cursor = 'pointer';
$axure.eventManager.click('u223', function(e) {

if (true) {

	SetPanelVisibility('u220','hidden','none',500);

	SetPanelVisibility('u172','hidden','none',500);

}
});
document.getElementById('u225_img').tabIndex = 0;

u225.style.cursor = 'pointer';
$axure.eventManager.click('u225', function(e) {

if (true) {

	SetPanelVisibility('u224','hidden','none',500);

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
gv_vAlignTable['u6'] = 'center';gv_vAlignTable['u8'] = 'top';gv_vAlignTable['u240'] = 'top';gv_vAlignTable['u241'] = 'top';gv_vAlignTable['u242'] = 'top';gv_vAlignTable['u243'] = 'top';gv_vAlignTable['u244'] = 'top';gv_vAlignTable['u245'] = 'top';gv_vAlignTable['u10'] = 'center';gv_vAlignTable['u12'] = 'center';document.getElementById('u13_img').tabIndex = 0;

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
gv_vAlignTable['u19'] = 'center';gv_vAlignTable['u110'] = 'center';gv_vAlignTable['u112'] = 'center';gv_vAlignTable['u114'] = 'center';gv_vAlignTable['u250'] = 'top';gv_vAlignTable['u116'] = 'center';gv_vAlignTable['u255'] = 'top';document.getElementById('u20_img').tabIndex = 0;

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
gv_vAlignTable['u25'] = 'center';gv_vAlignTable['u29'] = 'center';gv_vAlignTable['u206'] = 'center';u207.tabIndex = 0;

u207.style.cursor = 'pointer';
$axure.eventManager.click('u207', function(e) {

if (true) {

	SetPanelVisibility('u172','','none',500);

	SetPanelVisibility('u220','','none',500);

}
});
document.getElementById('u208_img').tabIndex = 0;

u208.style.cursor = 'pointer';
$axure.eventManager.click('u208', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Upcoming_Bids.html');

}
});
gv_vAlignTable['u209'] = 'center';gv_vAlignTable['u120'] = 'center';gv_vAlignTable['u122'] = 'center';gv_vAlignTable['u124'] = 'center';gv_vAlignTable['u126'] = 'center';gv_vAlignTable['u32'] = 'center';gv_vAlignTable['u34'] = 'center';gv_vAlignTable['u36'] = 'center';gv_vAlignTable['u38'] = 'center';gv_vAlignTable['u216'] = 'center';document.getElementById('u217_img').tabIndex = 0;

u217.style.cursor = 'pointer';
$axure.eventManager.click('u217', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u218'] = 'center';gv_vAlignTable['u201'] = 'center';gv_vAlignTable['u202'] = 'top';gv_vAlignTable['u204'] = 'top';gv_vAlignTable['u257'] = 'top';gv_vAlignTable['u40'] = 'center';gv_vAlignTable['u42'] = 'center';gv_vAlignTable['u44'] = 'center';gv_vAlignTable['u46'] = 'center';gv_vAlignTable['u48'] = 'center';gv_vAlignTable['u226'] = 'center';gv_vAlignTable['u228'] = 'center';gv_vAlignTable['u229'] = 'top';gv_vAlignTable['u50'] = 'center';gv_vAlignTable['u52'] = 'center';gv_vAlignTable['u54'] = 'center';gv_vAlignTable['u56'] = 'center';gv_vAlignTable['u58'] = 'center';gv_vAlignTable['u237'] = 'center';gv_vAlignTable['u238'] = 'top';gv_vAlignTable['u239'] = 'top';gv_vAlignTable['u60'] = 'center';gv_vAlignTable['u62'] = 'center';gv_vAlignTable['u64'] = 'center';gv_vAlignTable['u66'] = 'center';gv_vAlignTable['u68'] = 'center';gv_vAlignTable['u246'] = 'top';gv_vAlignTable['u247'] = 'top';gv_vAlignTable['u248'] = 'top';gv_vAlignTable['u249'] = 'top';