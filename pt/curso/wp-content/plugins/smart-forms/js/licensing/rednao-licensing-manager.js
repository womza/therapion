function RedNaoLicensingManager()
{
    this.Popup=rnJQuery('<div id="redNaoProVersionDialog" title="Full version needed" style="display: none">\
                           <p >Sorry, this version only support up to 8 fields</p>\
                           <a href="javascript:RedNaoLicensingManagerVar.ValidateLicense();">I already have a license</a>\
                           <div id="licenseDiv" style="display: block;"></div>\
                        </div>').dialog({
            modal:true,
            autoOpen:false,
            buttons: {
                "Get Pro Version": function() {
                    window.open("http://rednao.com/smartforms.html",'_blank');
                    rnJQuery( this ).dialog( "close" );

                },
                "Close": function() {
                    rnJQuery( this ).dialog( "close" );
                }
            },create: function(event, ui){
                rnJQuery('.ui-dialog').wrap('<div class="smartFormsSlider" />');
            },
            open: function(event, ui){
                rnJQuery('.ui-widget-overlay').wrap('<div class="smartFormsSlider" />');

            }
        });

    if(RedNaoSmartFormLicenseErrorMessage.trim()!='')
        this.LicenseIsValid(RedNaoSmartFormLicenseErrorMessage);

}
RedNaoLicensingManager.prototype.ValidateLicense=function()
{
    rnJQuery('#licenseDiv').html('<form id="rednaoLicenseForm" method="post" style="width:100%; margin-top:10px;" ">' +
        '                           <table style="width:100%">' +
        '                               <tr>' +
        '                                   <td>' +
        '                                       <span>Email </span>' +
        '                                   </td>' +
        '                                   <td style="width:100%">' +
        '                                       <input type="text" id="licenseEmail" style="width:100%" name="license_email"/>' +
        '                                   </td>' +
        '                               </tr>' +
        '                               <tr>' +
        '                                   <td> ' +
        '                                       <span>License </span>' +
        '                                   </td>' +
        '                                   <td style="width:100%">' +
        '                                       <input id="licenseKey" type="text" style="width:100%" name="license_key"/>' +
        '                                   </td>' +
        '                               </tr>' +
        '                               <tr>' +
        '                                   <td style="text-align: right" colspan="2">' +
        '                                       <Button id="applyButton">Apply</Button> ' +
        '                                   </td>' +
        '                               </tr>' +
        '                           </table> ' +
        '                       </form>')

    var self=this;
    rnJQuery('#rednaoLicenseForm #applyButton').click(function(e){e.preventDefault();self.SubmitLicenseForValidation();})
}

RedNaoLicensingManager.prototype.SubmitLicenseForValidation=function()
{
    var data={};
    data.action="rednao_smart_forms_submit_license";
    data.email=rnJQuery('#licenseEmail').val();
    data.key=rnJQuery('#licenseKey').val();
    var self=this;
    rnJQuery.post(ajaxurl,data,function(result){
        var result=rnJQuery.parseJSON(result);
        alert(result.Message);
        if(result.IsValid=="y")
        {
            self.Popup.dialog('close');
            RedNaoSmartFormLicenseIsValid=true;
        }
    });
    return false;
}

RedNaoLicensingManager.prototype.LicenseIsValid=function(errorMessage)
{
    if(RedNaoSmartFormLicenseIsValid)
        return true;

    this.Popup.find('p').text(errorMessage);
    this.Popup.dialog('open');
}

var RedNaoLicensingManagerVar=null;
rnJQuery(function(){
    RedNaoLicensingManagerVar=new RedNaoLicensingManager();
});