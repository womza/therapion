/**
 * editor_plugin_src.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 *
 * Adds auto-save capability to the TinyMCE text editor to rescue content
 * inadvertently lost. This plugin was originally developed by Speednet
 * and that project can be found here: http://code.google.com/p/tinyautosave/
 *
 * TECHNOLOGY DISCUSSION:
 * 
 * The plugin attempts to use the most advanced features available in the current browser to save
 * as much content as possible.  There are a total of four different methods used to autosave the
 * content.  In order of preference, they are:
 * 
 * 1. localStorage - A new feature of HTML 5, localStorage can store megabytes of data per domain
 * on the client computer. Data stored in the localStorage area has no expiration date, so we must
 * manage expiring the data ourselves.  localStorage is fully supported by IE8, and it is supposed
 * to be working in Firefox 3 and Safari 3.2, but in reality is is flaky in those browsers.  As
 * HTML 5 gets wider support, the AutoSave plugin will use it automatically. In Windows Vista/7,
 * localStorage is stored in the following folder:
 * C:\Users\[username]\AppData\Local\Microsoft\Internet Explorer\DOMStore\[tempFolder]
 * 
 * 2. sessionStorage - A new feature of HTML 5, sessionStorage works similarly to localStorage,
 * except it is designed to expire after a certain amount of time.  Because the specification
 * around expiration date/time is very loosely-described, it is preferrable to use locaStorage and
 * manage the expiration ourselves.  sessionStorage has similar storage characteristics to
 * localStorage, although it seems to have better support by Firefox 3 at the moment.  (That will
 * certainly change as Firefox continues getting better at HTML 5 adoption.)
 * 
 * 3. UserData - A very under-exploited feature of Microsoft Internet Explorer, UserData is