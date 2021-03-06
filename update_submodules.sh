#!/bin/bash

source "update_functions.sh"

execmoodle=false
execwordpress=false
execintraweb=false
execportal=false

if [[ $1 == 'onlymoodle' ]]
then
	execmoodle=true
elif [[ $1 == 'onlywordpress' ]]
then
	execwordpress=true
elif [[ $1 == 'onlyintraweb' ]]
then
	execintraweb=true
elif [[ $1 == 'onlyportal' ]]
then
	execportal=true
else
	execmoodle=true
	execwordpress=true
	execintraweb=true
	execportal=true
fi

#El tercer paràmetre només es posa si el repositori és nostre per poder-hi escriure

if [[ $execmoodle == true ]]
then
# Moodle
gitcheckout "html/moodle2" "master" "git@github.com:projectestac/agora_moodle2.git"
gitcheckout "html/moodle2/auth/googleoauth2" "master" "git@github.com:projectestac/moodle-auth_googleoauth2.git"
gitcheckout "html/moodle2/blocks/completion_progress" "master" "git@github.com:projectestac/moodle-block_completion_progress.git"
gitcheckout "html/moodle2/blocks/courses_vicensvives" "master" "https://github.com/vicensvives/moodle-block_courses_vicensvives.git"
gitcheckout "html/moodle2/blocks/licenses_vicensvives" "master" "https://github.com/vicensvives/moodle-block_licenses_vicensvives.git"
gitcheckout "html/moodle2/blocks/rgrade" "master" "https://github.com/projectestac/Rgrade.git"
gitcheckout "html/moodle2/course/format/simple" "master" "git@github.com:projectestac/moodle-format_simple.git"
gitcheckout "html/moodle2/course/format/vv" "master" "https://github.com/vicensvives/moodle-format_vicensvives.git"
gitcheckout "html/moodle2/filter/wiris" "master" "git@github.com:wiris/moodle-filter_wiris.git"
gitcheckout "html/moodle2/langpacks" "master" "git@github.com:projectestac/moodle-langpacks.git"
gitcheckout "html/moodle2/lib/editor/atto/plugins/fontsize" "master" "https://github.com/andrewnicols/moodle-atto_fontsize.git"
gitcheckout "html/moodle2/lib/editor/atto/plugins/fontfamily" "master" "git@github.com:projectestac/moodle-atto_fontfamily.git"
gitcheckout "html/moodle2/lib/editor/atto/plugins/wiris" "master" "git@github.com:wiris/moodle-atto_wiris.git"
gitcheckout "html/moodle2/local/agora" "master" "git@github.com:projectestac/moodle-local_agora.git"
gitcheckout "html/moodle2/local/agora/mailer" "master" "git@github.com:projectestac/mailer.git"
gitcheckout "html/moodle2/local/alexandriaimporter" "master" "git@github.com:projectestac/moodle-local_alexandriaimporter.git"
gitcheckout "html/moodle2/local/bigdata" "master" "git@github.com:projectestac/moodle-local_bigdata.git"
gitcheckout "html/moodle2/local/clickedu" "MOODLE_32_STABLE" "git@github.com:clickedu/ClickeduMoodlePlugin.git"
gitcheckout "html/moodle2/local/oauth" "master" "git@github.com:projectestac/moodle-local_oauth.git"
gitcheckout "html/moodle2/local/mobile" "MOODLE_32_STABLE" "https://github.com/jleyva/moodle-local_mobile.git"
gitcheckout "html/moodle2/local/wsvicensvives" "master" "https://github.com/vicensvives/moodle-local_ws_vicensvives.git"
gitcheckout "html/moodle2/mod/choicegroup" "master" "git@github.com:ndunand/moodle-mod_choicegroup.git"
gitcheckout "html/moodle2/mod/geogebra" "master" "git@github.com:projectestac/moodle-mod_geogebra.git"
gitcheckout "html/moodle2/mod/hotpot" "master" "https://github.com/gbateson/moodle-mod_hotpot.git"
gitcheckout "html/moodle2/mod/hvp" "master" "git@github.com:projectestac/moodle-mod_hvp.git"
gitcheckout "html/moodle2/mod/jclic" "master" "git@github.com:projectestac/moodle-mod_jclic.git"
gitcheckout "html/moodle2/mod/journal" "MOODLE_32_STABLE" "https://github.com/elearningsoftware/moodle-mod_journal.git"
gitcheckout "html/moodle2/mod/questionnaire" "MOODLE_32_STABLE" "https://github.com/remotelearner/moodle-mod_questionnaire.git"
gitcheckout "html/moodle2/mod/qv" "master" "git@github.com:projectestac/moodle-mod_qv.git"
gitcheckout "html/moodle2/question/format/hotpot" "master" "https://github.com/gbateson/moodle-qformat_hotpot.git"
gitcheckout "html/moodle2/question/type/essaywiris" "master" "git@github.com:wiris/moodle-qtype_essaywiris.git"
gitcheckout "html/moodle2/question/type/matchwiris" "master" "git@github.com:wiris/moodle-qtype_matchwiris.git"
gitcheckout "html/moodle2/question/type/multianswerwiris" "master" "git@github.com:wiris/moodle-qtype_multianswerwiris.git"
gitcheckout "html/moodle2/question/type/multichoicewiris" "master" "git@github.com:wiris/moodle-qtype_multichoicewiris.git"
gitcheckout "html/moodle2/question/type/shortanswerwiris" "master" "git@github.com:wiris/moodle-qtype_shortanswerwiris.git"
gitcheckout "html/moodle2/question/type/truefalsewiris" "master" "git@github.com:wiris/moodle-qtype_truefalsewiris.git"
gitcheckout "html/moodle2/question/type/wq" "master" "git@github.com:wiris/moodle-qtype_wq.git"
gitcheckout "html/moodle2/report/coursequotas" "master" "git@github.com:projectestac/moodle-report_coursequotas.git"
gitcheckout "html/moodle2/theme/xtec2" "master" "git@github.com:projectestac/moodle-theme_xtec2.git"
fi

if [[ $execwordpress == true ]]
then
# Wordpress
gitcheckout "html/wordpress" "master" "git@github.com:projectestac/agora_nodes.git"
gitcheckout "html/wordpress/wp-content/mu-plugins/common" "master" "git@github.com:projectestac/wordpress-mu-common.git"
gitcheckout "html/wordpress/wp-content/plugins/add-to-any" "master" "git@github.com:projectestac/wordpress-add-to-any.git"
gitcheckout "html/wordpress/wp-content/plugins/bbpress" "master" "git@github.com:projectestac/wordpress-bbpress.git"
gitcheckout "html/wordpress/wp-content/plugins/blogger-importer" "master" "git@github.com:projectestac/wordpress-blogger-importer.git"
gitcheckout "html/wordpress/wp-content/plugins/buddypress" "master" "git@github.com:projectestac/wordpress-buddypress.git"
gitcheckout "html/wordpress/wp-content/plugins/buddypress-activity-plus" "master" "git@github.com:projectestac/wordpress-buddypress-activity-plus.git"
gitcheckout "html/wordpress/wp-content/plugins/buddypress-docs" "master" "git@github.com:projectestac/wordpress-buddypress-docs.git"
gitcheckout "html/wordpress/wp-content/plugins/buddypress-group-email-subscription" "master" "git@github.com:projectestac/wordpress-buddypress-group-email-subscription.git"
gitcheckout "html/wordpress/wp-content/plugins/buddypress-like" "master" "git@github.com:projectestac/wordpress-buddypress-like.git"
gitcheckout "html/wordpress/wp-content/plugins/email-subscribers" "master" "git@github.com:projectestac/wordpress-email-subscribers.git"
gitcheckout "html/wordpress/wp-content/plugins/google-analyticator" "master" "git@github.com:projectestac/wordpress-google-analyticator.git"
gitcheckout "html/wordpress/wp-content/plugins/google-calendar-events" "master" "git@github.com:projectestac/wordpress-gce.git"
gitcheckout "html/wordpress/wp-content/plugins/import-users-from-csv-with-meta" "master" "git@github.com:projectestac/wordpress-import-users-from-csv-with-meta.git"
gitcheckout "html/wordpress/wp-content/plugins/invite-anyone" "master" "git@github.com:projectestac/wordpress-invite-anyone.git"
gitcheckout "html/wordpress/wp-content/plugins/polylang" "master" "git@github.com:projectestac/wordpress-polylang.git"
gitcheckout "html/wordpress/wp-content/plugins/slideshare" "master" "git@github.com:projectestac/wordpress-slideshare.git"
gitcheckout "html/wordpress/wp-content/plugins/slideshow-jquery-image-gallery" "master" "git@github.com:projectestac/wordpress-slideshow-jig.git"
gitcheckout "html/wordpress/wp-content/plugins/table-of-contents-plus" "master" "git@github.com:projectestac/wordpress-table-of-contents-plus.git"
gitcheckout "html/wordpress/wp-content/plugins/tinymce-advanced" "master" "git@github.com:projectestac/wordpress-tinymce-advanced.git"
gitcheckout "html/wordpress/wp-content/plugins/wordpress-importer" "master" "git@github.com:projectestac/wordpress-importer.git"
gitcheckout "html/wordpress/wp-content/plugins/wordpress-php-info" "master" "git@github.com:projectestac/wordpress-php-info.git"
gitcheckout "html/wordpress/wp-content/plugins/wordpress-social-login" "master" "git@github.com:projectestac/wordpress-social-login.git"
gitcheckout "html/wordpress/wp-content/plugins/widget-visibility-without-jetpack" "master" "git@github.com:projectestac/wordpress-widget-visibility-without-jetpack.git"
gitcheckout "html/wordpress/wp-content/plugins/wp-recaptcha" "master" "git@github.com:projectestac/wordpress-recaptcha.git"
gitcheckout "html/wordpress/wp-content/plugins/xtec-ldap-login" "master" "git@github.com:projectestac/wordpress-xtec-ldap-login.git"
gitcheckout "html/wordpress/wp-content/plugins/xtec-mail/lib" "master" "git@github.com:projectestac/mailer.git"
gitcheckout "html/wordpress/wp-includes/xtec" "master" "git@github.com:projectestac/wordpress-xtec.git"
fi

if [[ $execportal == true ]]
then
# Portal
gitcheckout "html/portal/modules/XtecMailer/includes/mailer" "master" "git@github.com:projectestac/mailer.git"
fi

# General
gitcheckout "html/testlib" "master" "git@github.com:projectestac/testlib_PHP.git"

