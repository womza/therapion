<?php
function rednao_smart_forms_load_form($title,$form_id,$returnComponent)
{
    $options=get_transient("rednao_smart_forms_$form_id");
    $options=false;
    if($options==false)
    {
        global $wpdb;
        $result=$wpdb->get_results($wpdb->prepare("select form_id,element_options,form_options,client_form_options from ".SMART_FORMS_TABLE_NAME." where form_id=%d",$form_id));
        if(count($result)>0)
        {
            $result=$result[0];
            $options=array( 'elements'=>$result->element_options,
                            'options'=>$result->form_options,
                            'form_id'=>$result->form_id,
                            'client_form_options'=>$result->client_form_options
            );

            set_transient("rednao_smart_forms_$form_id",$options);
        }

    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('smart-forms-event-manager',SMART_FORMS_DIR_URL.'js/formBuilder/eventmanager.js',array('isolated-slider'));
    wp_enqueue_script('isolated-slider',plugin_dir_url(__FILE__).'js/rednao-isolated-jq.js');
    wp_enqueue_script('smart-forms-generator',plugin_dir_url(__FILE__).'js/form-generator.js',array('isolated-slider',));
    wp_enqueue_script('smart-forms-form-elements',plugin_dir_url(__FILE__).'js/formBuilder/formelements.js',array('smart-forms-generator'));
    wp_enqueue_script('smart-forms-formula',SMART_FORMS_DIR_URL.'js/formBuilder/formula/formula.js',array('isolated-slider','smart-forms-event-manager'));
    wp_enqueue_script('smart-forms-formula-manager',SMART_FORMS_DIR_URL.'js/formBuilder/formula/formulamanager.js',array('isolated-slider','smart-forms-event-manager','smart-forms-formula'));
    wp_enqueue_script('smart-forms-elements-manipulators',SMART_FORMS_DIR_URL.'js/formBuilder/properties/manipulators.js',array('isolated-slider'));
	wp_enqueue_script('smart-forms-icheck',SMART_FORMS_DIR_URL.'js/utilities/iCheck/icheck.js',array('isolated-slider'));
	require_once(SMART_FORMS_DIR.'translations/form-elements-translation.php');

    wp_enqueue_style('smart-forms-Slider',SMART_FORMS_DIR_URL.'css/smartFormsSlider/jquery-ui-1.10.2.custom.min.css');
    wp_enqueue_style('smart-forms-custom-elements',plugin_dir_url(__FILE__).'css/formBuilder/custom.css');
	wp_enqueue_style('form-builder-icheck-normal',SMART_FORMS_DIR_URL.'js/utilities/iCheck/skins/minimal/minimal.css');
	wp_enqueue_style('form-builder-icheck-normal-red',SMART_FORMS_DIR_URL.'js/utilities/iCheck/skins/minimal/red.css');
    echo "<script type=\"text/javascript\">var ajaxurl = '".admin_url('admin-ajax.php')."';</script>";
    $random=rand();

    if($returnComponent==false)
    {
        if($options==null)
            return;

        if($title)
            echo "<div class='widget-wrapper'><h3 class='widgettitle widget-title'>$title</h3>"

        ?>

        <div id="formContainer<?php echo $random?>" class='rednaoFormContainer'></div>

        <script>
            var smartFormsPath="<?php echo plugin_dir_url(__FILE__)?>";
            var smartDonationsRootPath="<?php echo SMART_DONATIONS_PLUGIN_URL ?>";
            var smartDonationsSandbox="<?php echo SMART_DONATIONS_SANDBOX ?>";
			var smartFormsDesignMode=false;
            if(!window.smartFormsItemsToLoad)
                window.smartFormsItemsToLoad=new Array();;

            window.smartFormsItemsToLoad.push({'form_id':<?php echo $options['form_id']?>, 'elements':<?php echo $options['elements']?>,'client_form_options':<?php echo $options['client_form_options']?>,'container':'formContainer<?php echo $random?>'});

        </script>
        <?php
        if($title)
            echo "</div>";

    }else{
        if($options==null)
            return "";
        return "<div id='formContainer$random' class='rednaoFormContainer'></div>
            <script>
                var smartFormsPath=\"".plugin_dir_url(__FILE__)."\";
                var smartDonationsRootPath=\"".SMART_DONATIONS_PLUGIN_URL."\";
                var smartDonationsSandbox=\"".SMART_DONATIONS_SANDBOX."\";
                var smartFormsDesignMode=false;
                if(!window.smartFormsItemsToLoad)
                    window.smartFormsItemsToLoad=new Array();;
                window.smartFormsItemsToLoad.push({ 'form_id':".$options['form_id'].",  'elements':".$options['elements'].",'client_form_options':".$options['client_form_options'].",'container':'formContainer$random'});
            </script>
           ";
    }
}