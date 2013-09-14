for(var i = 0; i < 57; i++) { var scriptId = 'u' + i; window[scriptId] = document.getElementById(scriptId); }

$axure.eventManager.pageLoad(
function (e) {

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelState('u0', 'pd1u0','none','',500,'none','',500);

}

if ((GetGlobalVariableValue('LoggedIn')) == ('true')) {

	SetPanelVisibility('u35','','none',500);

}

});
gv_vAlignTable['u51'] = 'top';gv_vAlignTable['u52'] = 'top';gv_vAlignTable['u54'] = 'top';
u55.style.cursor = 'pointer';
$axure.eventManager.click('u55', function(e) {

if (true) {

SetGlobalVariableValue('LoggedIn', 'true');

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Now_Bidding.html');

}
});
gv_vAlignTable['u56'] = 'top';document.getElementById('u20_img').tabIndex = 0;

u20.style.cursor = 'pointer';
$axure.eventManager.click('u20', function(e) {

if (true) {

    self.location.href="resources/reload.html#" + encodeURI($axure.globalVariableProvider.getLinkUrl($axure.pageData.url));

}
});
gv_vAlignTable['u21'] = 'center';gv_vAlignTable['u23'] = 'top';document.getElementById('u24_img').tabIndex = 0;

u24.style.cursor = 'pointer';
$axure.eventManager.click('u24', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Search_results.html');

}
});
gv_vAlignTable['u25'] = 'center';gv_vAlignTable['u29'] = 'center';document.getElementById('u31_img').tabIndex = 0;

u31.style.cursor = 'pointer';
$axure.eventManager.click('u31', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Upcoming_Bids.html');

}
});
gv_vAlignTable['u32'] = 'center';document.getElementById('u33_img').tabIndex = 0;

u33.style.cursor = 'pointer';
$axure.eventManager.click('u33', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Price_History.html');

}
});
gv_vAlignTable['u34'] = 'center';document.getElementById('u36_img').tabIndex = 0;

u36.style.cursor = 'pointer';
$axure.eventManager.click('u36', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Account.html');

}
});
gv_vAlignTable['u37'] = 'center';document.getElementById('u38_img').tabIndex = 0;

u38.style.cursor = 'pointer';
$axure.eventManager.click('u38', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Now_Bidding.html');

}
});
gv_vAlignTable['u39'] = 'center';gv_vAlignTable['u2'] = 'center';document.getElementById('u3_img').tabIndex = 0;

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
gv_vAlignTable['u6'] = 'center';gv_vAlignTable['u8'] = 'top';document.getElementById('u40_img').tabIndex = 0;

u40.style.cursor = 'pointer';
$axure.eventManager.click('u40', function(e) {

if (true) {

	self.location.href=$axure.globalVariableProvider.getLinkUrl('Home.html');

}
});
gv_vAlignTable['u41'] = 'center';gv_vAlignTable['u45'] = 'top';gv_vAlignTable['u44'] = 'center';gv_vAlignTable['u47'] = 'top';gv_vAlignTable['u49'] = 'top';gv_vAlignTable['u10'] = 'center';gv_vAlignTable['u12'] = 'center';document.getElementById('u13_img').tabIndex = 0;

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
gv_vAlignTable['u19'] = 'center';