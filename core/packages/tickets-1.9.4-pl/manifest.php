<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for Tickets.

1.9.4 pl
==========
- Fixed sometimes bug with save section properties.
- On update ticket upload files UX improvement.
- Save state "clear cache" on update section ticket.

1.9.3 pl
==========
- Ability to delete ticket on front by owner. And undelete ticket on front if it was deleted by owner.
- Added new TicketForm parameters: &allowDelete, &redirectDeleted, &redirectUnDeleted (for delete on front), &tid (forced update Form without $_REQUEST["tid"]).
- Add sorting with Drag & Drop TicketFile on TicketForm (on save - link with ms2Gallery rank).

1.9.2 pl
==========
- Fixed creating access policies on install or update.

1.9.1 pl
==========
- Ability to create new comments from manager.

1.9.0 pl
==========
- Improved support of MODX 2.7.
- Removed unnecessary files.
- Minimum version is MODX 2.3.

1.8.5 pl
==========
- Fixed possible SQL injections by Agel_Nash.

1.8.4 pl
==========
- The calendar in the manager now respects the "manager_week_start" system setting.

1.8.3 pl
==========
- Fixed removing TicketTotal on removing Ticket.

1.8.2 pl
==========
- Unpublished tickets send code HTTP 403.
- Fixed bug with ability to overwrite properties of TicketsSection when you save it in manager.
- Fixed auto change of "createdon" field in "TicketAuthor" class.
- Fixed comments model.

1.8.1 pl
==========
- Added "kbd" to allowed preformatted tags.
- [#149] Fixed loading rich text editors in controllers (especially TinyMCE).
- [#148] [TicketComments] Fixed the loading of all comments when &thread is not specified.
- [#147] Added an javascript events on save and preview comments and tickets.
- [#135] [TicketComments] Added ability to custom "error" element nesting in javascript.

1.8.0 pl
==========
- Added support of ms2Gallery 2.0.
- TicketFile thumbnails now stored in a separate folder.
- Improved update of ticket form by data from server.

1.7.6 pl
==========
- Fixed the work of TicketMeta with usual resources.
- Removed broken option "&permissions" from snippet TicketForm.
- Fixed possible E_WARNING in plugin at line 50.

1.7.5 pl
==========
- Fixed "total_rating" placeholders in a chunks.
- The TicketMeta snippet now updates document variables on load.

1.7.4 pl
==========
- Fixed bug with dynamic override ticket section on save.

1.7.3 pl
==========
- Some security fixes.

1.7.2 pl
==========
- Fixed the counting of comments of a ticket.

1.7.1 pl
==========
- Updated jQuery.jGrowl to the latest version.
- Fixed the clearing of cache of a resource on save from manager.

1.7.0 pl
==========
- Requires MODX 2.3+
- PSR-2
- System setting "section_content_default" is now empty by default.
- [#139] Added return of id of the saved ticket.
- Added new plugin events: OnBeforeTicketVote, OnBeforeCommentVote, OnBeforeTicketStar, OnBeforeTicketUnStar, OnBeforeCommentStar and OnBeforeCommentUnStar.
- Ability to limit the number of days to vote for a tickets and comments in a sections.
- Ability to require the minimum rating to create a tickets and comments in a section.
- New object "TicketTotal" that stores total values of sections and tickets: rating, comments, views, etc.
- Improved the speed of processing sections with a big number of tickets and comments.

1.6.17 pl
==========
- Updated model for MySQL 5.7.

1.6.16 pl
==========
- [#134] [TicketMeta] Added ability to specify &thread.

1.6.15 pl
==========
- Improved load of pdoTools.

1.6.14 pl
==========
- [#133] Added trailing semicolon for inline scripts.
- [#132] Unset service "action" property before object save.

1.6.13 pl
==========
- Fixed save of TicketAuthorAction with empty rating.

1.6.12 pl
==========
- [#130] Respect section settings on ticket create in manager.

1.6.11 pl
==========
- Chunks of emails now use the lexicons.

1.6.10 pl
==========
- Added escaping of Fenom tags

1.6.9 pl
==========
- [mgr] Added search by author of ticket in tickets list.
- Added new events: OnCommentVote and OnTicketVote.
- Added new events: OnCommentStar, OnCommentUnStar, OnTicketStar, OnTicketUnStar.

1.6.8 pl
==========
- [getTickets] Fixed counting wrong number of views.

1.6.7 pl
==========
- Fixed typo in redirect rule of plugin.
- Returned missing Jevix property sets.
- Improved tables resolver for update really old versions.
- Added autoload of Prettify in default.js

1.6.6 pl
==========
- Improved installation script for MODX 2.4.

1.6.5 pl
==========
- [#126] Fixed possible issue with thread latest comment

1.6.4 pl
==========
- [#125] fixed deletion of dependent objects.

1.6.3 pl
==========
- Improved performance of installer.
- Fixed possibility to create a new comment with specified rating.
- [getTickets] Fixed parameter &toSeparatePlaceholders.

1.6.2 pl
==========
- [mgr] Fixed special checkboxes handling in Ticket panel.
- Improved performance of Tickets saving.

1.6.1 pl
==========
- Improved counting of totals in AuthorProfile.
- More ratings in AuthorProfile.
- [mgr] Improved authors page.

1.6.0 pl3
==========
- [#113] Added ratings for the authors.
- [#122] [TicketComments] Added parameter &requiredFields for snippet.
- [#122] [TicketComments] Improved frontend errors handling.
- [#111] Ability to load any js and css files on Tickets initialization.
- [#87] Added new tab with the all tickets of the site.
- [#83] Improved extension of TicketsSection page.
- [#84] Added profiles of authors.
- [#83] Improved extension of Ticket page.
- [#61] Ability to specify url of comments thread for opening from manager.
- [mgr] Improved Tickets grid on TicketsSection page.
- [mgr] Improved Threads grid.
- [mgr] Improved Comments grid.
- [mgr] More Comments events.
- [mgr] More Threads events.
- [mgr] New method Tickets::loadManagerFiles for 3rd party components.
- Updated MarkItUp to version 1.1.14.
- Updated Plupload to version 2.1.2.
- Added system settings with tree icons for MODX 2.3.
- Code reformat.
- [#120] Fixed permissions in comments processors.
- [#119] Fixed pagination in comments grid.
- [#118] Tickets::sanitizeString can process simple arrays.
- [#117] Fixed work with "tvs_below_content".
- [#114] [getComments] Fixed showDeleted parameter.
- [#108] Improved method TicketThread::buildTree.
- [#107] Fixed missing tag "bad".
- [getComments] Fixed displaying deleted comments.
- [#93] [TicketComments] Fixed notices about unpublished comments to admins.
- [#81] [TicketForm] Added parameter &bypassFields.

1.5.1 pl
==========
- Improved editing html entities in page titles.

1.5.0 pl
==========
- Ability to specify multiple previews for uploaded images in media source.
- [#115] Fixed tickets uri generation.
- [#110] Fixed aggregate connection to modUser in TicketComment.
- [#95] Ability to remove user files for members of group "Administrator".
- Ability to count guests views of pages. New system setting "tickets.count_guests".

1.4.2 pl1
==========
- Improved sanitization of MODX tags in snippet TicketForm.

1.4.2 rc2
==========
- Changed Gravatar url to https protocol.
- Fixed work with MODX 2.3.
- Fixed sort of tickets grid.
- [#100] Fixed tables resolver.
- Fixed rare bug with users combo on advanced site configuration.

1.4.1 pl
==========
- Improved redirect of NotFound tickets in plugin.

1.4.0 pl1
==========
- Fixed bug with listing of all comments in empty section.
- Fixed processing of "tickets.ticket_max_cut" in tickets processor.
- Comments are now using users photo if exists.
- Added parameter "resources" for TicketForm.

1.4.0 pl
==========
- Added section settings.
- Removed system settings "ticket_id_as_alias" and "section_id_as_alias".
- System settings "ticket_show_in_tree_default", "ticket_isfolder_force" and "ticket_hidemenu_force" moved to section settings.
- System settings "default_template", "disable_jevix_default", "process_tags_default" moved to section settings.
- Added ability to specify custom uris for children tickets.
- Added subscriptions for sections of tickets.
- Added chunks "tpl.Tickets.ticket.email.subscription" and "tpl.Tickets.sections.wrapper".
- New methods: TicketsSection:Subscribe() and TicketsSection::isSubscribed().
- Added new system setting "ticket_max_cut". Now you can specify length of text without tag "cut".
- Added ability to add tickets and comments into favorites.
- Added new snippet "getComments".
- Added new snippet "getStars".
- Added ability to publish and unpublish tickets.
- Added new system setting "unpublished_ticket_page".
- Added ability to upload files for tickets.
- Added permissions for work with files.
- Improved contexts support.
- Improved parameter "returnIds" in snippets.
- Improved handling of "ticketForm" properties and sections verification.
- Improved notifications about unpublished comments and tickets.
- Improved vote for any resource with TicketMeta.
- Improved list chunks.
- [TicketForm] Added ability to disable sisyphus for any fields by setting class "disable-sisyphus".
- [TicketComments] Added parameter "autoPublishGuest" for more flexible management of comments.
- [#80] Fixed innerJoin in getTickets.
- [#76] Fixed auto publication of tickets.
- [#75] Ability to vote for any resource.
- [#74] Fixed ticket panel for new versions of MODX.
- [#72] Fixed handling TVs.
- [#64] Fixed forced processing of introtext by Jevix.
- [mgr] Disabled ability to delete comment via update form.
- Fixed default template on ticket creation.
- Fixed saving ticket properties.

1.3.0 rc3
==========
- [#59] Added changing of opacity of bad comments.
- [#58] Fixed switching the document class from modDocument to Ticket.
- [#57] Added more user placeholders to preview and create comment.
- [#56] Added field "description".
- [#55] Fixed changing of alias when user edit ticket from frontend.
- Added placeholder [[+idx]] to comments.
- Added rating of comments.
- Added rating of tickets.
- Added new snippet TicketMeta.
- Added moving to the parent comment and back.
- Improved snippet TicketLatest.
- Improved clearing of cache right after ticket creation.
- Added checkbox "show_in_tree" in the panel of Ticket.
- Added system setting "ticket_show_in_tree_default".
- Changed some default system setting.
- Added column "owner" to "TicketVote" for select rating of users.
- Added hotkeys for preview and submit tickets and comments.
- Added anonymous comments.
- Added simple math captcha for anonymous users.
- Removed inline onclick events.
- Fixed checking of "requiredFields" in TicketForm.
- Fixed restoring of old data in new ticket form by Sisyphus.
- Improved javascript for Internet Explorer.
- Improved snippets because closed thread can contain comments.

1.2.4 rc5
==========
- Improved update chunks on package upgrade.
- Fixed word "Array" when no tickets in section.
- Added requirement of pdoTools 1.9.x.
- Thread and comments are removed along with the page.
- Added aggregate relationship "Resource" for TicketThread.
- Added parameter "context" in snippet "TicketForm".
- Action.php works with respect to contexts.
- Fixed web/sections/getlist processor.
- Changed permission in mgr/comment/update from "update_document" to "comment_save".

1.2.4 rc1
==========
- Added two system settings: "section_id_as_alias" and "ticket_id_as_alias".
- Added "uri_override" checkbox.
- Improved snippets getTickets and getTicketsSection.
- Improved snippet "TicketForm" - see new properties.
- Improved chunks for working on iOS.
- Updated chunks for Bootstrap 3.
- Ability to update chunks on package upgrade.
- Removed chunk "tpl.Tickets.form.section.row".
- Fixed placeholder [[+children]] when fastMode = 0 in TicketComments.
- Ability to move comment from one thread to another.
- Improved check of users authentication.
- [#54] Field idx in TicketsSection.
- [#47] Auto hide "new comment" button.
- [#43] Parameter &redirectUnpublished in TicketForm.

1.2.3 pl3
==========
- Fixed requirement of TicketThread in snippet TicketLatest for showing last tickets.
- Improved snippet TicketLatest.
- [#52] Fixed checkboxes, again.
- Fixed duplicate replies in TicketComments when fastMode = 0.
- Removed user and email inputs in comment window in manager.

1.2.2 pl
==========
- Fixed load of CMP scripts

1.2.1 pl1
==========
- Fixed page with TicketsSection in manager for work in php 5.5.

1.2.0 pl
==========
- Replaced virtual field "comment" in TicketThread to real.
- Optimized snippet "getTicketsSections" for work on big sites.

1.1.3 pl
==========
- [#50] Added button for ticket duplicate in section grid.
- Improved two comboboxes in manager: "createdon" and "parent".

1.1.2 pl
==========
- [#51] Fixed work of checkboxes in manager.

1.1.1 pl
==========
- Improved load of pdoTools.
- Improved registration of javascript on frontend.
- Updated jQuery to version 1.10.2.
- Updated jQuery.Form to version 20131017.
- Added jQuery.Sisyphus for persisting your forms data in a browsers local storage.
- [#49] Added action fields to Ticket actions for more Form Customization.
- [#44] Fixed time format in tickets list.

1.1.0 pl
==========
- Added parameter "cacheTime" for TicketLatest.
- Fixed method Ticket::toArray().
- Added placeholder [[+date_ago]] to class "Ticket". You can use $ticket->get(\'date_ago\');
- Added new system parameter "section_content_default".
- Fixed blank template when create new ticket if no "tickets.default_template" set.
- Added more checkboxes for Ticket in manager.
- Added new system parameters "ticket_hidemenu_force" and "ticket_isfolder_force". You can disable them.
- If user edits ticket which was moved in the category into which the user has no rights, this category will be saved.

1.1.0 rc2
==========
- Fixed snippets for work with pdoTools 1.8.0.

1.1.0 rc1
==========
- Improved send of emails.
- Fixed unsubscription message.
- Email notifications are not sent to the authors of events.

1.1.0 beta2
==========
- Unread comments class removes only when it refreshed manually.
- Added JSON field "properties" to "TicketComment". Now you can store additional data in comments.
- Functions json_encode() and json_decode() replaced to modX::toJSON() and modX::fromJSON().
- Snippet "TicketForm" was completely rewrited.
- Added parameters "allowedFields" and "requiredFields" to snippet "TicketForm". You can use TVs names.
- Tickets created and updated through ajax without reload of form.
- Error messages is not sticky anymore.

1.1.0 beta
==========
- Added system setting "tickets.mail_from"
- Added system setting "tickets.mail_from_name"
- Added system setting "tickets.mail_bcc" for sending notifications for site admins.
- Added system setting "tickets.mail_bcc_level" for setting level of admin notifications.
- Added chunk "tpl.Tickets.ticket.email.bcc" for admin notification about new ticket.
- Added chunk "tpl.Tickets.comment.email.bcc" for admin notification about new comment.
- Added chunk "tpl.Tickets.comment.email.subscription" for notification of thread subscribers.
- Improved responses from server through ajax.
- New class "TicketQueue" for mail queue.
- New methods: Tickets::addQueue(), TicketThread:isSubscribed() and Tickets::Subscribe() that using TicketThread::Subscribe().
- Added system setting "tickets.mail_queue" for specifying whether to use delayed send of mail.
- [#37] Fixed issue with loading incorrect TVs when create new Ticket.
- [#35] Fixed javascript bug in comments, when "autoPublish=0".
- [#34] Unprocessed placeholders are now removed from preview.
- [#30] TicketsSection now has its own context menu in manager.
- [#29] Fixed errors when snippet "TicketLatest" called before "TicketComments".
- Fixed issue with change template when create new Ticket.
- Fixed issue with hidden new comment, when you reply to another one, and it was changed while you typing.

1.0.0 pl1 (requires pdoTools 1.4.1 or later)
==========
- Add ukrainian lang for frontend.
- Improved all snippets.
- Fixed parameter "parents" in "TicketLatest".

1.0.0 rc4
==========
- Fixed comments bugs when work in limited depth mode.
- Smooth scroll to just created comment.
- Improved ajax update of comments.

1.0.0 rc3
==========
- Comments fixes and improvements

1.0.0 rc2
==========
- Added comments level dots in default css.
- Added indication of unseen comments.
- Added ajax navigation through new comments.
- Added ajax fetching of new comments.
- Fixed primary keys in model of component.
- Added "mode" indication in comment save: "preview" or "create".
- Improved gravatar hash generation.

1.0.0 rc1
==========
- Improved snippet TicketLatest for displaying latest comments of user

1.0.0 rc (requires pdoTools 1.2.0 or later)
==========
- Fixed default parameters of snippets. "showLog" and "fastMode" are now really disabled by default.
- Rewrited snippet "getTickets". See snippet properties for details.
- Rewrited snippet "getTicketsSections". See snippet properties for details.
- Rewrited snippet "TicketLatest". See snippet properties for details.
- Rewrited snippet "TicketComments". See snippet properties for details.
- Updated awesome html editor "MarkItUp" to version 1.1.14.
- Added system parameters "tickets.frontend_js" and "tickets.frontend_css" for loading scripts and styles.
- Merged and rewrited default frontend styles and scripts.
- Replaced Tickets::getChunk() by pdoTools::getChunk().
- Added "jGrowl" script for frontend notifications.
- [#5] Fixed bug with no field "resource" when preview comment.
- [#6] Added parameter "depth" to snippet "TicketComments" for limitation thread depth.
- [#7] Added parameter "formBefore" to snippet "TicketComments" for specify where to show form, before or after.
- [#8] Sorting of thread comments depends from parameter "formBefore".
- [#11], [#12] Added checking of parent comment status when you reply on it.
- [#15] Added comments moderation. Check new parameter "autoPublish" of snippet "TicketComments".
- [#18] Parameters of thread now saving in "TicketThread" object and updates on page refresh.
- [mgr] Added ability to "close" thread. When thread is closed, comments are shown but adding new is disabled.
- [mgr] Added ability to "publish" and "unpublish" comments.

0.9.4
==========
- Fixed bug with ignoring default template of ticket on frontend.

0.9.3
==========
- [mgr] Template fix on ticket create
- [mgr] Fixed permissions for manage comments
- [mgr] Fixed non-install of some system parameters
- Improved snippets for calling them multiple times on one page
- Improved verification of ticket fields when create
- Fixed endless redirect on unpublished or deleted tickets
- Parameter "showLog" is now disabled by default in snippets
- Improved lexicons

0.9.2
==========
- [mgr] Fixed bug with no refresh on ticket create.
- Fixed alias of ticket, created from front.

0.9.1
==========
- [mgr] Fixed bug with no changing author of the ticket when creating it in manager.
- [mgr] Ability to change parent of the comment.
- [mgr] Ability to specify alias of the ticket.
- [mgr] Fixed empty dates in comment window.
- Placeholder [[+date_ago]] in snippet TicketLatest now created from "createdon" property.

0.9.0
==========
- Fixes for PHP 5.4
- Fix error when update ticket with disabled "automatic_alias".
- Deleted /component/tickets/pdotools/.
- Automatic installation of pdoTools from MODX repository.
- 2 new snippets: getTickets and getSections.
- getTickets is set by default for empty Section content.
- Changed chunk tpl.Tickets.list.row for displaying unread comments count.
- New chunk tpl.Tickets.sections.row.

0.8.3
==========
- MarkitUp javascript is now loadings at the bottom of web page.
- Private tickets. If ticket has this param, users will must be have permission "ticket_view_private" for reading it. Otherwise they will be redirected to "tickets.private_ticket_page".
- Fix processing MODX tags when edit comment.
- Little chunks fixes because of ajax issue in some browsers.
- Added parameter "toPlaceholder" to snippet TicketLatest.

0.8.2
==========
- Fixed bug with empty string after Jevix sanitization, if there was some html entities, such as &_nbsp; or &_raquo;.
- Added virtual field "comments" to class TicketThread. Now you can get it as they were natural with TicketThread::get() or TicketThread::toArray().
- Update last comment id and last comment time in thread on comment remove.

0.8.1
==========
- Added clearing cache of ticket on comments create\\update\\delete\\remove. Now you can call [[TicketComments]] cached and do not forget to activate next parameter.
- New system parameter "tickets.clear_cache_on_comment_save". If false, tickets cache will not be cleared on comment. Use it with uncached snippet call.
- No email notices on comments update.
- Improved redirect to tickets in plugin. Now it understands any nesting level.

0.8.0
==========
- [mgr] Added changing section of the ticket.
- [mgr] Added tab with all comments.
- Added editing of comments by author.
- New system parameter "tickets.comment_edit_time". You can set number of seconds during which comment can be edited.
- Added pretty dates formatting - Tickets::formatDate().
- Added placeholder [[+date_ago]] to comments chunks.
- Added placeholder [[+date_ago]] to last tickets and last comments chunks.
- Added virtual fields "comments" and "views" to class TicketsSection. Now you can get it as they were natural with TicketsSection::get() or TicketsSection::toArray().
- Improved chunks processing.
- Normal MODX tags when update ticket on frontend. [[*id]] instead of &#091;&#091;*id&#093;&#093;
- When you request ticket, that was moved into another section, with old url - user will be redirected to right page.

0.7.0
==========
- [mgr] Fixed default settings when create new ticket.
- Added placeholders of user profile in comments chunks.
- Added plugins events
- New system setting "snippet_prepare_comment" for custom prepare data of the comment.

0.6.0
==========
- [mgr] Added Custom Manager Page for manage comments. Now you can use TicketComments without Tickets.
- [mgr] Fixed selecting default template on ticket create.
- Improved handling of MODX tags in Ticket::getContent.
- Improved frontend javascript files for tickets and comments.
- Removed parameters &useJs=`` and &useCss=`` from snippet TicketComments.
- Added counting of ticket views by users.
- Latest comments now respects status of resource. It must be published and not deleted.
- Added disabling comments to ticket by setting flag "deleted" to comments thread.
- Added virtual fields "comments" and "views" to class Ticket. Now you can get it as they were natural with Ticket::get() or Ticket::toArray().
- Removed snippet getCommentsCount. Just use placeholder [[+comments]] or [[+views]] in chunks.
- Added placeholders [[+comments]] and [[+views]] to ticket page.
- Localized chunks.
- Chunks and snippets now are static by default.

0.5.0
==========
- [mgr] #2 Added support of TinyMCE
- [mgr] Fixed maximize comment window.
- [mgr] New ticket option "disable Jevix". If true - all content of the page will be displayed without filtration.
- [mgr] New ticket option "process MODX tags". If true - all tags on ticket page will be processed by MODX parser.
- [mgr] New system parameter "disable_jevix_default". Sets default value for new ticket.
- [mgr] New system parameter "process_tags_default". Sets default value for new ticket.
- Auto generation of introtext field by cutting text before tag <cut/> in ticket.
- When displaying tickets, tag <cut/> transformed into anchor <a name="cut"></a>
- Improved getLatestComments - now much more faster.

0.4.1
==========
- Added default content for TicketsSection in manager

0.4.0
==========
- Fixed installer
- Automatic installation of Jevix and creation of property sets for filter comments and tickets

0.3.3
==========
- Improved Ticket class, for better work with its cache
- Fixed work with dates on Ticket update

0.3.2
==========
- Custom manager page for Ticket

0.3.1
==========
- Security fixes
- comment_save permission is enabled in TicketsUserPolicy by default
- Snippet tagCut

0.3.0
==========
- Custom manager page for TicketsSection

0.2.0
==========
- Removed dependency on Quip. Now comments are very fast and handy.
- Various improvements and bug fixes

0.1.0
==========
- First beta',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
Tickets
--------------------
Author: Vasiliy Naumkin <bezumkin@yandex.ru>
--------------------

Tickets system for MODX Revolution.

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/Tickets/issues',
    'chunks' => 
    array (
      'tpl.Tickets.comment.email.bcc' => '[[%ticket_comment_email_bcc_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>
',
      'tpl.Tickets.comment.email.owner' => '[[%ticket_comment_email_owner_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>',
      'tpl.Tickets.comment.email.reply' => '[[%ticket_comment_email_reply_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>
<br/><br/>

[[%ticket_comment_email_reply_text]]
<pre>[[+parent_text]]</pre>',
      'tpl.Tickets.comment.email.subscription' => '[[%ticket_comment_email_subscription_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>',
      'tpl.Tickets.comment.email.unpublished' => '[[%ticket_comment_email_unpublished_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[+manager_url]]">[[%ticket_email_all_comments]]</a>',
      'tpl.Tickets.comment.form' => '<h4 id="comment-new-link">
    <a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
    <form id="comment-form" action="" method="post" class="well">
        <div id="comment-preview-placeholder"></div>
        <input type="hidden" name="thread" value="[[+thread]]"/>
        <input type="hidden" name="parent" value="0"/>
        <input type="hidden" name="id" value="0"/>

        <div class="form-group">
            <label for="comment-editor"></label>
            <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-actions">
            <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
            <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
            <span class="time"></span>
        </div>
    </form>
</div>',
      'tpl.Tickets.comment.form.guest' => '<h4 id="comment-new-link">
    <a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
    <form id="comment-form" action="" method="post" class="well">
        <div id="comment-preview-placeholder"></div>
        <input type="hidden" name="thread" value="[[+thread]]"/>
        <input type="hidden" name="parent" value="0"/>
        <input type="hidden" name="id" value="0"/>

        <div class="form-group">
            <label for="comment-name">[[%ticket_comment_name]]</label>
            <input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-email">[[%ticket_comment_email]]</label>
            <input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-editor"></label>
            <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
        </div>

        [[+captcha]]

        <div class="form-actions">
            <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
            <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
            <span class="time"></span>
        </div>
    </form>
</div>

<!--tickets_captcha
<div class="form-group">
    <label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
    <input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
    <span class="error"></span>
</div>
-->',
      'tpl.Tickets.comment.latest' => '<div class="tickets-latest-row[[+guest]]">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="ticket">
        <a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
      'tpl.Tickets.comment.list.row' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
    <div class="ticket-comment-body[[+guest]]">
        <div class="ticket-comment-header">
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
            <span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

            <span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
                <span class="rating[[+rating_positive]][[+rating_negative]]"
                      title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
                <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i
                            class="glyphicon glyphicon-arrow-up"></i></span>
                <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i
                            class="glyphicon glyphicon-arrow-down"></i></span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
    </div>

    <a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i>
        [[+section.pagetitle]]</a> &rarr;
    <a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
    <span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'tpl.Tickets.comment.login' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
      'tpl.Tickets.comment.one.auth' => '<li class="ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]"
    data-newparent="[[+new_parent]]" data-id="[[+id]]">
    <div class="ticket-comment-body[[+guest]][[+bad]]">
        <div class="ticket-comment-header">
            <div class="ticket-comment-dot-wrapper">
                <div class="ticket-comment-dot"></div>
            </div>
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
            <span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>
            [[+has_parent]]
            <span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>
            <span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
                <span class="rating[[+rating_positive]][[+rating_negative]]"
                      title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
                <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i
                            class="glyphicon glyphicon-arrow-up"></i></span>
                <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i
                            class="glyphicon glyphicon-arrow-down"></i></span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
    </div>
    <div class="comment-reply">
        <a href="#" class="reply">[[%ticket_comment_reply]]</a>
        [[+comment_edit_link]]
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_comment_edit_link <a href="#" class="edit">[[%ticket_comment_edit]]</a>-->
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_comment_new  ticket-comment-new-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->
',
      'tpl.Tickets.comment.one.deleted' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body alert alert-warning">
        [[%ticket_comment_deleted_text]]
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
',
      'tpl.Tickets.comment.one.guest' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body[[+bad]]">
        <div class="ticket-comment-header">
            <div class="ticket-comment-dot-wrapper">
                <div class="ticket-comment-dot"></div>
            </div>
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

            [[+has_parent]]
            <span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

            <span class="ticket-comment-rating inactive">
                <span class="rating[[+rating_positive]][[+rating_negative]]">
                    [[+rating]]
                </span>
                <span class="plus" title="[[%ticket_like]]">
                    <i class="glyphicon glyphicon-arrow-up"></i>
                </span>
                <span class="minus" title="[[%ticket_dislike]]">
                    <i class="glyphicon glyphicon-arrow-down"></i>
                </span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
      'tpl.Tickets.comment.wrapper' => '<div class="comments">
    [[+modx.user.id:isloggedin:is=`1`:then=`
    <span class="comments-subscribe pull-right">
        <label for="comments-subscribe" class="checkbox">
            <input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]]/> [[%ticket_comment_notify]]
        </label>
    </span>
    `:else=``]]

    <h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>

    <div id="comments-wrapper">
        <ol class="comment-list" id="comments">[[+comments]]</ol>
    </div>

    <div id="comments-tpanel">
        <div id="tpanel-refresh"></div>
        <div id="tpanel-new"></div>
    </div>
</div>

<!--tickets_subscribed checked-->
',
      'tpl.Tickets.form.create' => '<form class="well create" method="post" action="" id="ticketForm">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="0"/>

    <div class="form-group">
        <label for="ticket-sections">[[%tickets_section]]</label>
        <select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
        <input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value=""
               maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor"
                  rows="10"></textarea>
        <span class="error"></span>
    </div>

    <div class="ticket-form-files">
        [[+files]]
    </div>

    <div class="form-actions row">
        <div class="col-md-6">
            <input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter"/>
        </div>
        <div class="col-md-6 move-right">
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            <input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]"
                   title="Ctrl + Shift + Enter"/>
        </div>
    </div>
</form>',
      'tpl.Tickets.form.file' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            [[+file]]
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]">
            [[+name]]
        </a>
    </div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'tpl.Tickets.form.files' => '<div id="ticket-files-list">
    [[+files]]
    <div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
    <a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
    <div id="ticket-files-progress">
        <span id="ticket-files-progress-count">0/0</span>
        <span id="ticket-files-progress-percent">0%</span>
        <div id="ticket-files-progress-bar"></div>
    </div>
</div>',
      'tpl.Tickets.form.image' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            <img src="[[+thumb]]" class="ticket-file-image"/>
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]" title="[[+name]]">
            <img src="[[+thumb]]"/>
        </a>
    </div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'tpl.Tickets.form.preview' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
      'tpl.Tickets.form.update' => '<form class="well update" method="post" action="" id="ticketForm">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="[[+id]]"/>

    <div class="form-group">
        <label for="ticket-sections">[[%tickets_section]]</label>
        <select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
        <input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle"
               value="[[+pagetitle]]" maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10">[[+content]]</textarea>
        <span class="error"></span>
    </div>

    <div class="ticket-form-files">
        [[+files]]
    </div>

    <div class="form-actions row">
        <div class="col-md-4">
            <input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter"/>
        </div>
        <div class="col-md-8 move-right">
            [[+published:is=`1`:then=`
            <a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs" target="_blank">[[%ticket_open]]</a>
            <input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title=""/>
            `:else=`
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            `]]
            <input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]"
                   title="Ctrl + Shift + Enter"/>
            [[+allowDelete:is=`1`:then=`
                [[+deleted:is=`1`:then=`
                <input type="button" class="btn btn-default undelete" data-confirm="[[%ticket_undelete_text]]" name="undelete" value="[[%ticket_undelete]]"/>
                `:else=`
                <input type="button" class="btn btn-default delete" data-confirm="[[%ticket_delete_text]]" name="delete" value="[[%ticket_delete]]"/>
                `]]
            `]]
        </div>
    </div>
</form>',
      'tpl.Tickets.list.row' => '<div class="tickets-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
    <div class="content">
        [[+introtext]]<br/>
        <a href="[[~[[+id]]]]#cut" class="btn btn-default ticket-read-more">[[%ticket_read_more]]</a>
    </div>
    <div class="ticket-meta row" data-id="[[+id]]">
        <span class="col-md-5">
            <i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
            &nbsp;&nbsp;
            <i class="glyphicon glyphicon-user"></i> [[+fullname]]
        </span>
        <span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
        <span class="col-md-3">
            <span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span
                        class="ticket-star-count">[[+stars]]</span></span>
            &nbsp;&nbsp;
            <i class="glyphicon glyphicon-eye-open"></i> [[+views]]
            &nbsp;&nbsp;
            <i class="glyphicon glyphicon-comment"></i> [[+comments]]  [[+new_comments]]
        </span>
        <span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
            <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
            [[+can_vote]][[+cant_vote]]
            <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i
                        class="glyphicon glyphicon-arrow-down"></i></span>
        </span>
    </div>
</div>
<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_new_comments <span class="ticket-new-comments">+[[+new_comments]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'tpl.Tickets.meta' => '<div class="ticket-meta row" data-id="[[+id]]">
    <span class="col-md-5">
        <i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
        &nbsp;&nbsp;
        <i class="glyphicon glyphicon-user"></i> [[+fullname]]
    </span>
    <span class="col-md-2"><a href="[[~[[+section.id]]]]">
            <i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a>
    </span>
    <span class="col-md-2">
        <span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span
                    class="ticket-star-count">[[+stars]]</span></span>
        &nbsp;&nbsp;
        <i class="glyphicon glyphicon-eye-open"></i> [[+views]]
    </span>
    <span class="pull-right ticket-rating[[+active]][[+inactive]]">
        <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]">
            <i class="glyphicon glyphicon-arrow-up"></i>
        </span>
        [[+can_vote]][[+cant_vote]]
        <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]">
            <i class="glyphicon glyphicon-arrow-down"></i>
        </span>
    </span>
</div>
[[+has_files]]

<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<ul class="ticket-files">
    <strong>[[%ticket_uploaded_files]]:</strong>
    [[+files]]
</ul>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'tpl.Tickets.meta.file' => '<li>
    <a href="[[+url]]" target="_blank">[[+name]]</a> [[+size]] kb
</li>',
      'tpl.Tickets.sections.row' => '<div class="section-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
    <div class="content">
        [[+introtext]]
    </div>
    <div class="section-meta row">
        <div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
    </div>
</div>',
      'tpl.Tickets.sections.wrapper' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
    <label for="tickets-subscribe" class="checkbox">
        <input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]"
               [[+subscribed:notempty=`checked`]]/> [[%tickets_section_notify]]
    </label>
</span>
`:else=``]]

<div class="tickets-list">
    [[+output]]
</div>',
      'tpl.Tickets.ticket.email.bcc' => '[[%ticket_email_bcc_intro?
&fullname=`[[+user.fullname]]`
&email=`[[+user.email]]`
&id=`[[+id]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'tpl.Tickets.ticket.email.subscription' => '[[%ticket_email_subscribed_intro?
&id=`[[+id]]`
&fullname=`[[+user.fullname]]`
&section=`[[+section.id]]`
&section_title=`[[+section.pagetitle]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'tpl.Tickets.ticket.latest' => '<div class="tickets-latest-row">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="section">
        <i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span
                class="arrow">&rarr;</span>
    </span>
    <span class="ticket">
        <a href="[[~[[+id]]]]">[[+pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
    ),
    'setup-options' => 'tickets-1.9.4-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '75b7f39079c2d07dea01ce6e93d9adec',
      'native_key' => 'tickets',
      'filename' => 'modNamespace/fec46d2d7a653cb8161a8d5a32057f75.vehicle',
      'namespace' => 'tickets',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7ff262110dbcdcbe7f18b55628e5c690',
      'native_key' => 'mgr_tree_icon_ticketssection',
      'filename' => 'modSystemSetting/2b25c8d271a5bcc066f70cc0ddd98136.vehicle',
      'namespace' => 'tickets',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a407402de34a2189f8fe7346ea7104ed',
      'native_key' => 'mgr_tree_icon_ticket',
      'filename' => 'modSystemSetting/6ef607b77bd0c87973e3168ed87587d4.vehicle',
      'namespace' => 'tickets',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5d781ab2762849cdee9e66fc79b44a5f',
      'native_key' => 'tickets.date_format',
      'filename' => 'modSystemSetting/797eac159686b43c5a73e56fcf4e56b6.vehicle',
      'namespace' => 'tickets',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ddd1b194164a7e7f2bbd371baa2bb6d9',
      'native_key' => 'tickets.enable_editor',
      'filename' => 'modSystemSetting/bf1fab224a6d1843b7e25ab37fd090a7.vehicle',
      'namespace' => 'tickets',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6a87665c1be4a7d5e7a07d1d797a10c6',
      'native_key' => 'tickets.frontend_css',
      'filename' => 'modSystemSetting/3c70549452a7e11cae9cdc1521c84d21.vehicle',
      'namespace' => 'tickets',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd243e6ed22fd25095f614d3a82c89c89',
      'native_key' => 'tickets.frontend_js',
      'filename' => 'modSystemSetting/43031b8ee3c44fb3fd93ee03066d32f5.vehicle',
      'namespace' => 'tickets',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '085b28020ad1e2f3b7026bb1e013bab2',
      'native_key' => 'tickets.editor_config.ticket',
      'filename' => 'modSystemSetting/710f6d8c7ced9e2d5621d4781ed28366.vehicle',
      'namespace' => 'tickets',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '05a9f4d3c13eac8d958aa77bb66d33fc',
      'native_key' => 'tickets.editor_config.comment',
      'filename' => 'modSystemSetting/9daaf72da54b78cd6fbd70b101d44a89.vehicle',
      'namespace' => 'tickets',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8fe4b51255ce68146dec25b4b5e1b9d8',
      'native_key' => 'tickets.default_template',
      'filename' => 'modSystemSetting/e6c0cc0fc94ea83b8187cd9ebaec646c.vehicle',
      'namespace' => 'tickets',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b2f92c18d361cfc937a881aba5d2e98',
      'native_key' => 'tickets.snippet_prepare_comment',
      'filename' => 'modSystemSetting/a8930a0d65213bab897ed6cbd3af634c.vehicle',
      'namespace' => 'tickets',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd39f3c375f195565f2a3284b5c2c52a0',
      'native_key' => 'tickets.comment_edit_time',
      'filename' => 'modSystemSetting/25dd6199ec88a395b58f738163f3bd14.vehicle',
      'namespace' => 'tickets',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a7176c2dfb039d3b0aeaa20e77fbe416',
      'native_key' => 'tickets.clear_cache_on_comment_save',
      'filename' => 'modSystemSetting/5485cfe5d8a715425a1e1d6f2563f864.vehicle',
      'namespace' => 'tickets',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b3b2a03d957ad8caad0ef56febd34b69',
      'native_key' => 'tickets.private_ticket_page',
      'filename' => 'modSystemSetting/4607eff0b3c51963e3b66b0b700e6895.vehicle',
      'namespace' => 'tickets',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '24abca6b04eec106eacf102a08caeace',
      'native_key' => 'tickets.unpublished_ticket_page',
      'filename' => 'modSystemSetting/82624fae87881c83a4f0c58ed52fa805.vehicle',
      'namespace' => 'tickets',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3fd9da82d04b5234262da3b3da4627f',
      'native_key' => 'tickets.ticket_max_cut',
      'filename' => 'modSystemSetting/11dda484ba3bceaffedd1bc442efccd1.vehicle',
      'namespace' => 'tickets',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1b640fbcd0f8a153f32007afed0a60b0',
      'native_key' => 'tickets.mail_from',
      'filename' => 'modSystemSetting/ae4d353b8e7787b5856156fd1dd36286.vehicle',
      'namespace' => 'tickets',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '95c68d8c0aa46fbde102a663f315fe5e',
      'native_key' => 'tickets.mail_from_name',
      'filename' => 'modSystemSetting/44eb8d7906337b445934990b24bc75a7.vehicle',
      'namespace' => 'tickets',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b878c1de8c4ba65a9188c59774a77380',
      'native_key' => 'tickets.mail_queue',
      'filename' => 'modSystemSetting/88a879fbe2d9ba39eb6104c119562e21.vehicle',
      'namespace' => 'tickets',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '09cfa5dc70cab21f96778d9ea44a5dde',
      'native_key' => 'tickets.mail_bcc',
      'filename' => 'modSystemSetting/b4810a923b5745459ccf3a5a3ac3f0ca.vehicle',
      'namespace' => 'tickets',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1526807cf767e9699c130e995af97cff',
      'native_key' => 'tickets.mail_bcc_level',
      'filename' => 'modSystemSetting/39e786e755287ababce78836397618dc.vehicle',
      'namespace' => 'tickets',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4f064fbf3e2c1ca484df06bcdb38884b',
      'native_key' => 'tickets.section_content_default',
      'filename' => 'modSystemSetting/8c4847bbb48ade2b4178f0e2419d7de2.vehicle',
      'namespace' => 'tickets',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '64d4899e9964ef88ec9e07bbd0007add',
      'native_key' => 'tickets.source_default',
      'filename' => 'modSystemSetting/ae5a5c0c233e56c688c58d32a42e0d29.vehicle',
      'namespace' => 'tickets',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '53029ceeed0e3ed86c6d5bd4b53d71c4',
      'native_key' => 'tickets.count_guests',
      'filename' => 'modSystemSetting/05158452bc7ef1338a54d6dc1477de4f.vehicle',
      'namespace' => 'tickets',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3b0c797a61ee0b85897fa8fbc3271537',
      'native_key' => 'OnBeforeCommentSave',
      'filename' => 'modEvent/98ec2227aa3e3953fb875be839d6fa43.vehicle',
      'namespace' => 'tickets',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7751d91147e2a02a6c00561dec7b2d3c',
      'native_key' => 'OnCommentSave',
      'filename' => 'modEvent/c6ae877190d67a6b1417434688df07ff.vehicle',
      'namespace' => 'tickets',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '6bf0dd431dad33d9a219fa7e18fc8d8a',
      'native_key' => 'OnBeforeCommentPublish',
      'filename' => 'modEvent/08ba9083ac86b982e590ae0d4a8de0e3.vehicle',
      'namespace' => 'tickets',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '61b04194c822b7f0a3ca5d56f8becac3',
      'native_key' => 'OnCommentPublish',
      'filename' => 'modEvent/75965267fd5845ef4ad1ee1388009f33.vehicle',
      'namespace' => 'tickets',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'd1e4619a7123ac4d8ce0b56c409d30c6',
      'native_key' => 'OnBeforeCommentUnpublish',
      'filename' => 'modEvent/fae0a3ed4f9e1db11878dc87901ae1db.vehicle',
      'namespace' => 'tickets',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '71de71db87f6e211c0e409fc5f113be1',
      'native_key' => 'OnCommentUnpublish',
      'filename' => 'modEvent/64c2eb8b5d045a9edd3fc96da33f73b7.vehicle',
      'namespace' => 'tickets',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '3fbec25a25cee83de2bfc915fb6272ed',
      'native_key' => 'OnBeforeCommentDelete',
      'filename' => 'modEvent/a405390fb853f25c4abce10afeaaacd6.vehicle',
      'namespace' => 'tickets',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'a8af840f7eb6b6756187152a90581dd7',
      'native_key' => 'OnCommentDelete',
      'filename' => 'modEvent/69315e139115628733943dea76a1ad95.vehicle',
      'namespace' => 'tickets',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '32189a552a7169f63bc3f035656cd1e1',
      'native_key' => 'OnBeforeCommentUndelete',
      'filename' => 'modEvent/cf85f5c304c4c76aa974b82ba0136c65.vehicle',
      'namespace' => 'tickets',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '607eb8606dde0176e19def4f715c5fdd',
      'native_key' => 'OnCommentUndelete',
      'filename' => 'modEvent/0c3d0f14d1755f083905fbf24845d25a.vehicle',
      'namespace' => 'tickets',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0df4f58cf756b86cebf134f20b841504',
      'native_key' => 'OnBeforeCommentRemove',
      'filename' => 'modEvent/c350db1b5baa8ac351f2bcfc06bcb077.vehicle',
      'namespace' => 'tickets',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '979c12700d74e4e341b0507b21b6f79b',
      'native_key' => 'OnCommentRemove',
      'filename' => 'modEvent/4f7b0633e49e2c0df4ae0dd26197705c.vehicle',
      'namespace' => 'tickets',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '50e4206cd011e75887ae4a7b1b5e91dc',
      'native_key' => 'OnBeforeTicketThreadClose',
      'filename' => 'modEvent/522103b001c6fa412ba5a29d4c50fdde.vehicle',
      'namespace' => 'tickets',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '396f91a1e70594545d48e8ec44ebe9d4',
      'native_key' => 'OnTicketThreadClose',
      'filename' => 'modEvent/a46620b8e8b1a84cb9756088203097c7.vehicle',
      'namespace' => 'tickets',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'fcdee3eaa5cf6b1995c074fd77bd4c56',
      'native_key' => 'OnBeforeTicketThreadOpen',
      'filename' => 'modEvent/384ba2ba57525780d444f7b0b61ac477.vehicle',
      'namespace' => 'tickets',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '412598b57cbc819f44acce8518c8f354',
      'native_key' => 'OnTicketThreadOpen',
      'filename' => 'modEvent/1a474a2636786d09880c9c450eda67a5.vehicle',
      'namespace' => 'tickets',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'e96085d3fede249fca5b7242100efb97',
      'native_key' => 'OnBeforeTicketThreadDelete',
      'filename' => 'modEvent/8194418807b023dc81d90b6b2bc5ecc8.vehicle',
      'namespace' => 'tickets',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'f0c0b587628e3edb713f3032b914cc5f',
      'native_key' => 'OnTicketThreadDelete',
      'filename' => 'modEvent/96dfb2a950c04a161a196f589472d0f5.vehicle',
      'namespace' => 'tickets',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '7204fb51da5e24a961bd7230d909b883',
      'native_key' => 'OnBeforeTicketThreadUndelete',
      'filename' => 'modEvent/b3a6f0eeb5c028d2f7a4d105076e2552.vehicle',
      'namespace' => 'tickets',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8c5beb5058db5dd4e4db731971eed169',
      'native_key' => 'OnTicketThreadUndelete',
      'filename' => 'modEvent/068f655e51196d1f2ad2779d2ef62f82.vehicle',
      'namespace' => 'tickets',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'afa0e9412232f4867d8ba86db2391116',
      'native_key' => 'OnBeforeTicketThreadRemove',
      'filename' => 'modEvent/f2c6cfe40ee3599070ec3c31f5bcb1ac.vehicle',
      'namespace' => 'tickets',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '1b794901b64a243d76ca996a52b8dd4b',
      'native_key' => 'OnTicketThreadRemove',
      'filename' => 'modEvent/6a8e19f3f62d6feebbff4e206b67db6d.vehicle',
      'namespace' => 'tickets',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '8e3636fb4bcd603f3f040c573f6e5a69',
      'native_key' => 'OnBeforeTicketVote',
      'filename' => 'modEvent/c45b3620dca76d9d31b979cfe155617f.vehicle',
      'namespace' => 'tickets',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '475ab61458d01cc2782f6a83fc3038fc',
      'native_key' => 'OnTicketVote',
      'filename' => 'modEvent/e83c6e5256de54cb35578e6546f13ad5.vehicle',
      'namespace' => 'tickets',
    ),
    48 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '902b9fd4f560eb892e58a50271ef8e5c',
      'native_key' => 'OnBeforeCommentVote',
      'filename' => 'modEvent/b82513357f1f2629a13e5720ba717c98.vehicle',
      'namespace' => 'tickets',
    ),
    49 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '106de1a58a0afd9948a05df0614b8198',
      'native_key' => 'OnCommentVote',
      'filename' => 'modEvent/6547e58dc79a88e7a88d106fa7bfdd5c.vehicle',
      'namespace' => 'tickets',
    ),
    50 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c657c0c0d845fafff6b8ddf258e0ef40',
      'native_key' => 'OnBeforeTicketStar',
      'filename' => 'modEvent/f218ff944c13e359cb8618cd4cb28eca.vehicle',
      'namespace' => 'tickets',
    ),
    51 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'b85f0812c888b44514067c01bd9fbe0e',
      'native_key' => 'OnTicketStar',
      'filename' => 'modEvent/6c1b1e8d9706cc44dfed2f4f4c609bff.vehicle',
      'namespace' => 'tickets',
    ),
    52 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '0ac9590ce4d8f8797d1c103bdfa96655',
      'native_key' => 'OnBeforeTicketUnStar',
      'filename' => 'modEvent/b40704014806a8edf84797eecc4c9d92.vehicle',
      'namespace' => 'tickets',
    ),
    53 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'c1a4afcee81e73c25298becb2ff4dea1',
      'native_key' => 'OnTicketUnStar',
      'filename' => 'modEvent/db647972d7030b6a06c5f1092b509f80.vehicle',
      'namespace' => 'tickets',
    ),
    54 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cf9878c9bde3f3e233c83b45a9ffaaf4',
      'native_key' => 'OnBeforeCommentStar',
      'filename' => 'modEvent/f6d0042597b733058540c31bbd6eb2ac.vehicle',
      'namespace' => 'tickets',
    ),
    55 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '304dc00d6d6ac673fa9358f5f590b828',
      'native_key' => 'OnCommentStar',
      'filename' => 'modEvent/de9742a07937b2df4fb2a75def94498c.vehicle',
      'namespace' => 'tickets',
    ),
    56 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '13a79f915f8dd4524cc655f04f3cb6ac',
      'native_key' => 'OnBeforeCommentUnStar',
      'filename' => 'modEvent/6072ffd9b36106d38229718891445a2b.vehicle',
      'namespace' => 'tickets',
    ),
    57 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '707e7cc5988782d4eb5fce04b2e688da',
      'native_key' => 'OnCommentUnStar',
      'filename' => 'modEvent/49704c213fc9e25b4d9756cf553d74f5.vehicle',
      'namespace' => 'tickets',
    ),
    58 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => 'fc15e18207256907c1851d634cc59e3c',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/71097da001f0c4f3cfca4205a3a9583f.vehicle',
      'namespace' => 'tickets',
    ),
    59 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '17d31433cc2b64646a208028bb4d08d8',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/75c04940c67ab3b1694f968fea1045dd.vehicle',
      'namespace' => 'tickets',
    ),
    60 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicy',
      'guid' => '3ff4f6a678409b4e5b7aa61f9dae81a6',
      'native_key' => NULL,
      'filename' => 'modAccessPolicy/ab36ed8134fc8b89eb72ac1db2a17eb1.vehicle',
      'namespace' => 'tickets',
    ),
    61 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'a8f5ef1f585af950f3eb83fadfeb7e19',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/44ef97fa1f11134258c069f37051db5e.vehicle',
      'namespace' => 'tickets',
    ),
    62 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'e80644d9a7688e5d10c168de00e6c73a',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/c761d5d9cebdec3354c5b56b90cb870f.vehicle',
      'namespace' => 'tickets',
    ),
    63 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'b1da6b41fbb0acf9d4169f1e2b784991',
      'native_key' => NULL,
      'filename' => 'modCategory/e61ff13c597c7921bfe550e597efcaed.vehicle',
      'namespace' => 'tickets',
    ),
    64 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '135199697a20b6871a27290fd544abb5',
      'native_key' => 'tickets',
      'filename' => 'modMenu/80cc12e626d19ffa0d63f70eadd844c2.vehicle',
      'namespace' => 'tickets',
    ),
  ),
);