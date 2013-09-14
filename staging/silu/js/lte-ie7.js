/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-checkmark-outline' : '&#xe001;',
			'icon-like-outline' : '&#xe003;',
			'icon-comment-solid' : '&#xe02c;',
			'icon-like-solid' : '&#xe002;',
			'icon-comment-solid-2' : '&#xe004;',
			'icon-users' : '&#xe005;',
			'icon-cabinet' : '&#xe006;',
			'icon-drawer' : '&#xe007;',
			'icon-silu' : '&#xe000;',
			'icon-users-2' : '&#xe008;',
			'icon-contract' : '&#xe009;',
			'icon-globe' : '&#xe00a;',
			'icon-checkmark-solid' : '&#xe00b;',
			'icon-remove-sign' : '&#xf057;',
			'icon-ok-sign' : '&#xf058;',
			'icon-minus-sign' : '&#xf056;',
			'icon-plus-sign' : '&#xf055;',
			'icon-chevron-left' : '&#xf053;',
			'icon-chevron-right' : '&#xf054;',
			'icon-comments' : '&#xf086;',
			'icon-comment' : '&#xf075;',
			'icon-camera' : '&#xf030;',
			'icon-caret-right' : '&#xf0da;',
			'icon-caret-left' : '&#xf0d9;',
			'icon-caret-up' : '&#xf0d8;',
			'icon-caret-down' : '&#xf0d7;',
			'icon-star' : '&#xf005;',
			'icon-star-empty' : '&#xf006;',
			'icon-ok' : '&#xe016;',
			'icon-remove' : '&#xf00d;',
			'icon-check' : '&#xf046;',
			'icon-check-empty' : '&#xf096;',
			'icon-circle-blank' : '&#xf10c;',
			'icon-circle' : '&#xf111;',
			'icon-spinner' : '&#xf110;',
			'icon-comment-alt' : '&#xf0e5;',
			'icon-envelope-alt' : '&#xf0e0;',
			'icon-envelope' : '&#xf003;',
			'icon-info-sign' : '&#xf05a;',
			'icon-exclamation-sign' : '&#xf06a;',
			'icon-question-sign' : '&#xf059;',
			'icon-file' : '&#xf016;',
			'icon-road' : '&#xf018;',
			'icon-forward' : '&#xf04e;',
			'icon-home' : '&#xf015;',
			'icon-flag' : '&#xf024;',
			'icon-lock' : '&#xf023;',
			'icon-minus' : '&#xf068;',
			'icon-plus' : '&#xf067;',
			'icon-folder-close-alt' : '&#xf114;',
			'icon-folder-close' : '&#xf07b;',
			'icon-calendar' : '&#xf073;',
			'icon-warning-sign' : '&#xf071;',
			'icon-cogs' : '&#xf085;',
			'icon-cog' : '&#xf013;',
			'icon-tag' : '&#xf02b;',
			'icon-tags' : '&#xf02c;',
			'icon-share' : '&#xf045;',
			'icon-pencil' : '&#xf040;',
			'icon-search' : '&#xf002;',
			'icon-refresh' : '&#xf021;',
			'icon-dashboard' : '&#xf0e4;',
			'icon-facebook' : '&#xe00c;',
			'icon-twitter' : '&#xe00d;',
			'icon-google-plus' : '&#xe00e;',
			'icon-linkedin' : '&#xe00f;',
			'icon-user' : '&#xe010;',
			'icon-user-2' : '&#xe011;',
			'icon-switch' : '&#xe012;',
			'icon-bolt' : '&#xf0e7;',
			'icon-location' : '&#xe013;',
			'icon-chevron-up' : '&#xf077;',
			'icon-chevron-down' : '&#xf078;',
			'icon-file-alt' : '&#xf0f6;',
			'icon-plus-sign-2' : '&#xf0fe;',
			'icon-print' : '&#xf02f;',
			'icon-download' : '&#xe014;',
			'icon-upload' : '&#xe015;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};