
<link href="./res/yjy.css" rel="stylesheet" type="text/css">
<link href="./res/facybox.css" rel="stylesheet" type="text/css">
<link href="./res/facybox_urls.css" rel="stylesheet" type="text/css">
<script src="./res/facybox.js" type="text/javascript"></script>
<script language="javascript" src="./res/validator.js"></script>
<script type="text/javascript">
$(function(){
     $('a[rel*=facybox]').facybox(); 
});
</script>



<style type="text/css">
<!--
.hint{

}

.no{
background:url(res/img/no.gif) no-repeat;
padding-left:18px;
display:block;
height:16px;
line-height:16px;
color:red;
}

.yes{
display:block;
height:16px;
line-height:16px;
width:16px;
background:url(res/img/yes.gif) no-repeat;
}

.srcCon{height:49px;background:url(res/img/yjy_1.gif) repeat-x;border-bottom:1px solid #CBCBCB;border-left:1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding:0 1px 1px 1px;}
.srcCon li{color:#CD0000; background:url(res/img/yjy_2.gif) no-repeat 3px 14px; padding:5px 0 0 30px; font-size:16px; font-weight:bold; line-height:43px; float:left; margin:0 0 0 10px; display:inline;}
.srcCon li.else{ background:url(res/img/yjy_3.gif) no-repeat 3px 14px; color:#646464;}








.hu12 {
    font-family: "宋体";
    font-size: 12px;
    color: #9A9A9A;
    text-decoration: none;
    border: 0px solid #EEF7FF;
    padding: 9px;
}
.infoshow {
    font-family: "宋体";
    font-size: 12px;
    color: #000000;
    text-decoration: none;
    background-color: #E6FFE6;
    border: 1px solid #000033;
    padding: 8px;
}




-->
</style>
<div class="wrapCnt" style="padding-top:0;">
<script type="text/javascript" language="JavaScript"><!--





function refreshCaptcha()
{
    var seed = Math.round(Math.random()*10000);
    showCaptchaObj = document.getElementById("showCaptcha");
    showCaptchaObj.src='./res/pic.php?seed='+seed;
}

--></script>
 <form name="registerform" id="registerform" method="post" action="index.php?p=www/register_done" onsubmit="return checkSubmit(this);">
	
    <div class="yjy">
        <div class="title">
            <span><strong>登陆名和密码</strong></span>
            <p>打<span>*</span>号的为必须填项</p>
        </div>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #E7E7E7;">
          
        </table>
        <p>请认真、仔细的填写以下信息，严肃的商业信息有助于您获得别人的信任，结交潜在的商业伙伴，获取商业机会！</p>
        <!--注册信息 begin-->
        <table width="716" border="0" cellspacing="0" cellpadding="0" align="center">
          <tbody><tr>
            <th width="143"><span>*</span>会员登录名：</th>
            <td width="302" colspan="3"><input type="text" dataType="userName" num="3-21"  onfocus="checkInput(this);" required="true" messageSpan="username_err"
            ajax="index.php?p=www/username&name=" ajax_err="用户名已存在，请重试"
            name="username" id="username" value="" size="50" class="putong"></td>
            <td width="263">
        	<span id="username_err"></span>
            <span id="username_info"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">登录名可以是4-20英文字符或数字组成</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>密码：</th>
            <td colspan="3"><input dataType="password" num="5-21"  onfocus="checkInput(this);" required="true" messageSpan="password_err"  name="password" id="password" type="password" class="putong" size="50"></td>
            <td><span id="password_err"></span>
			<span id="password_err"></span>
			<span id="password_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">密码长度6-20个英文字符和数字混合组成</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>确认密码：</th>
            <td colspan="3"><input repeat="password"  onfocus="checkInput(this);" required="true" messageSpan="passwordcheck_err"  type="password" name="passwordcheck" id="passwordcheck" class="putong" size="50"></td>
            <td><span id="passwordcheck_err"></span>
			<span id="passwordcheck_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">请再次输入密码</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>电子邮箱：</th>
            <td colspan="3"><input dataType="email" ajax="index.php?p=www/email&email=" ajax_err="email已存在，请重试"
  onfocus="checkInput(this);" required="true" messageSpan="email_err"  type="text" name="email" id="email" value="" class="putong" size="50"></td>
            <td><span id="email_err"></span>
            <span id="email_info"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">非常重要！这是客户与您联系的首选方式，请务必填写真实，并确认是您最常用的电子邮件。没有电子邮件？推荐使用免费的<span><a href="http://mail.163.com/" target="_blank">网易163邮箱</a>、</span>
            <span><a href="http://mail.cn.yahoo.com/" target="_blank">雅虎邮箱</a>、</span>
            <span><a href="http://get.live.com/mail" target="_blank">HOTMAIL邮箱</a>、</span>
            <span><a href="http://mail.google.com/" target="_blank">Gmail邮箱</a>、</span>
            <span><a href="http://mail.21cn.com/" target="_blank">21cn邮箱</a>。</span></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>贵公司名称：</th>
            <td colspan="3"><input  onfocus="checkInput(this);" required="true" messageSpan="corpname_err"  type="text" name="corpname" id="corpname" value="" class="putong" size="50"></td>
            <td>
            <span id="corpname_err"></span>
            <span id="corpname_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">*国内注册企业请用中文完整填写在工商局注册的全称。<br>
              如：中国互联网新闻中心。 无商号的个体经营者填写执照上的姓名，并标注个体经营。<span>如：张三（个体经营）</span></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>联系人姓名：</th>
            <td colspan="3"><input  onfocus="checkInput(this);" required="true" messageSpan="realname_err"   type="text" name="realname" id="realname" size="50" class="putong" value=""></td>
            <td><span id="realname_err"></span>
			<span id="realname_info"></span>
			</td>
          </tr>
          
            <tr>
            <th><span>*</span>联系电话：</th>           
            <td colspan="3"><input  onfocus="checkInput(this);" required="true" messageSpan="mobile_err"   type="text" class="putong" name="tel" id="tel" value="" size="50"></td>
            <td><span id="mobile_err"></span>
			</td>
          </tr>
          <tr>
            <th>手机号码：</th>
            <td colspan="3"><input type="text" class="putong" name="mobile" id="mobile" value="" size="50"></td>
            <td><span id="mobile_err"></span>
			</td>
          </tr>
          
          <tr>
            <th>性别：</th>
            <td colspan="3"><p><label><input type="radio" name="sex" value="先生" checked="checked">先生</label></p><p><label><input type="radio" name="sex" value="女士">女士</label></p></td>
            
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>验证图片：
			 </th><th colspan="3">
			 	<input  onfocus="checkInput(this);" required="true"   name="checkNum" id="verifystr" type="text" style="width:100px;float:left;height:19px;border: 1px #D5D5D5 solid;color: #646464;">
			 		<img id="showCaptcha" name="showCaptcha" src="./res/pic.php">
			     <a href="javascript:refreshCaptcha();">看不清楚，换张图片</a>
				 
		      </th>  
			<th>
			 <div id="verifystr_tip"></div>
			</th>
            <td>&nbsp;</td>
          </tr>
        </tbody></table>
        <!--注册信息 end-->
        
        <!--服务条款 begin-->
        <div class="bot">
            <a href="#serviceItem" rel="facybox" target="_blank">点此阅读中童网服务条款</a>
            <br />
            <input class="btn" type="submit"  id="button" value="同意服务条款，提交注册信息" >
        </div>
        <!--服务条款 end-->
	    
<div id="serviceItem" style="display:none;">
<textarea style="width:700px;height:368px" >欢迎阅读中童网服务条款协议(下称“本协议”)。本协议阐述之条款和条件适用于您使用www.ztb2b.com网站所提供的在全球企业间(B-TO-B)电子市场(e-market)中进行贸易和交流的各种工具和服务(下称“服务”)。 
 1. 接受条款。 
 进入www.ztb2b.com网站即表示您同意与中童网订立本协议，且您将受本协议的条款和条件 (“条款”) 约束。中童网可随时修改“条款”。如“条款”有任何变更，中童网将在其网站上刊载公告，通知予您。如您不同意相关变更，则可立即停止使用“服务”。经修订的“条款”一经在中童网网站的公布后，立即自动生效。您应在第一次登录后仔细阅读修订后的“条款”，并有权选择停止继续使用“服务”；一旦您继续使用“服务”，则表示您已接受经修订的“条款”，当您与中童网发生争议时，应以最新的服务协议为准。除另行明确声明外，任何使“服务”范围扩大或功能增强的新内容均受本协议约束 
  
   
   2.谁可使用www.ztb2b.com？ 
   “服务”仅供能够根据相关法律规定的有完全民事行为能力的人（自然人或公司）。中童网可随时自行全权决定拒绝向任何人士提供“服务”。 
    
    3. 收费。 
    本公司保留在根据第1条通知您后，收取“服务”费用的权利。您因进行交易、向本公司获取有偿服务或其他行为而发生的相关税赋和费用均由您自行承担。本公司保留在无须发出书面通知，仅在本网站公示的情况下，暂时或永久地更改或停止部分或全部“服务”的权利。
     
     4.中童网网站仅作为交易平台。 
     本网站仅作为用户物色交易对象，就货物和服务的交易进行协商，以及获取各类与贸易相关的服务的平台。但是，本网站不能控制所涉及的物品的质量、安全或合法性，信息的真实性或准确性，以及交易方履行其在贸易协议项下的各项义务的能力。本网站不能也不会控制交易各方能否履行协议义务。此外，您应注意到，与外国国民、未成年人或以欺诈手段行事的人进行交易的风险是客观存在的。 

     5.您的资料和供买卖的物品。 
     “您的资料”包括您在注册、交易或列举物品过程中、在任何公开信息场合或通过任何电子邮件形式，向本公司或其他用户提供的任何资料，您应对“您的资料”负全部责任，而本公司仅作为您在网上发布和刊登“您的资料”的被动渠道。但是，倘若本公司认为“您的资料”可能使本公司承担法律或道义上的责任，或可能使本公司失去本公司的互联网服务供应商或其他供应商的服务，或您未在规定的期限内登录登录网站，则本公司可自行全权决定对“您的资料”采取本公司认为必要或适当的任何行动，包括但不限于删除该类资料。您特此保证，您对提交给中童网的“您的资料”拥有全部权利，包括全部版权。您确认，中童网没有责任去认定或决定您提交给本公司的资料哪些是应当受到保护的，对享有“服务”的其他用户使用“您的资料”，本公司也不必负责。 
      
      5.1 注册义务。 
      如您在中童网网站注册，您同意：(a) 根据http://ztb2b.com/index.php?p=www/register网址所刊载的会员资料表格的要求，提供关于您或贵公司的真实、准确、完整和反映当前情况的资料；(b) 维持并及时更新会员资料，使其保持真实、准确、完整和反映当前情况。倘若您没有履行前述义务，或中童网有合理理由怀疑您没有履行前述义务，中童网有权暂停或终止您的注册身份及资料，并拒绝您将来对“服务”(或其任何部份) 以任何形式使用。如您代表一家公司或其他法律主体在本公司登记，则您声明和保证，您有权使该公司或其他法律主体受本协议“条款”约束。 
       
       5.2 会员注册名、密码和保密。 
       在登记过程中，您将选择会员注册名和密码。您须自行负责对您的会员注册名和密码保密，且须对您在会员注册名和密码下发生的所有活动承担责任。您同意：(a) 如发现任何人未经授权使用您的会员注册名或密码，或发生违反保密规定的任何其他情况，您会立即通知中童网；及 (b) 确保您在每个上网时段结束时，以正确步骤离开网站。中童网不能也不会对因您未能遵守本款规定而发生的任何损失负责。 
        
        5.3 关于您的资料的规则。 
        您同意，“您的资料”和您供在中童网网站上交易的任何“物品”（泛指一切可供依法交易的、有形的或无形的、以各种形态存在的某种具体的物品等等。 
        a. 不会有欺诈成份，与售卖伪造或盗窃无涉； 
        b. 不会侵犯任何第三者对该物品享有的物权，或知识产权，或隐私权、名誉权； 
        c. 不会违反任何法律、法规、条例或规章 (包括但不限于关于规范出口管理、贸易配额、保护消费者、不正当竞争或虚假广告的法律、法规、条例或规章)； 
        d. 不会含有诽谤（包括商业诽谤）、非法恐吓或非法骚扰的内容； 
        e. 不会含有淫秽、或包含任何儿童色情内容； 
        f. 不会含有蓄意毁坏、恶意干扰、秘密地截取或侵占任何系统、数据或个人资料的任何病毒、伪装破坏程序、电脑蠕虫、定时程序炸弹或其他电脑程序； 
        g. 不会直接或间接与下述各项货物或服务连接，或包含对下述各项货物或服务的描述：(i) 本协议项下禁止的货物或服务；或 (ii) 您无权连接或包含的货物或服务。此外，您同意不会：(h) 在与任何连锁信件、大量胡乱邮寄的电子邮件、滥发电子邮件或任何复制或多余的信息有关的方面使用“服务”；(i) 未经其他人士同意，利用“服务”收集其他人士的电子邮件地址及其他资料；或 (j) 利用“服务”制作虚假的电子邮件地址，或以其他形式试图在发送人的身份或信息的来源方面误导其他人士。 
         
         5.4 被禁止物品。 
         您不得在本公司网站公布或通过本公司网站买卖：(a) 可能使本公司违反任何相关法律、法规、条例或规章的任何物品；或 (b) 中童网认为应禁止或不适合通过本网站买卖的任何物品。

         5.5 信息侵权争议解决。
         您在此承诺，您对自己在本网站上提供的任何信息，依法承担全部责任。本网站对此信息的准确性、完整性、合法性或真实性均不承担任何责任。因您提供的信息侵犯任何第三人的合法权利，本网站也不承担任何责任。此外，本网站对任何使用或提供本网站信息的商业活动及其风险亦不承担任何责任。
         如果您认为本网站上的任何人的注册信息侵犯了您的合法权益，您应该立即通过发送邮件至kefu@mail.china.cn或采用邮寄、传真等其他书面形式通知我网站侵权的具体信息、侵权方式等情况并提供相关证明，以便我网站对该信息采取删除等相应处理措施。


         6. 您授予本公司的许可使用权。 
         您授予本公司独家的、全球通用的、永久的、免费的许可使用权利 (并有权在多个层面对该权利进行再授权)，使本公司有权(全部或部份地) 使用、复制、修订、改写、发布、翻译、分发、执行和展示"您的资料"或制作其派生作品，和/或以现在已知或日后开发的任何形式、媒体或技术，将"您的资料"纳入其他作品内。 
          
          7.隐私。 
          尽管有第6条所规定的许可使用权，中童网将仅根据本公司的隐私声明使用“您的资料”。本公司隐私声明的全部条款属于本协议的一部份，因此，您必须仔细阅读。请注意，您一旦自愿地在中童网交易地点披露“您的资料”，该等资料即可能被其他人士获取和使用。 
           
           8.交易程序。 
            
            8.1 添加产品描述条目。
            产品描述是由您提供的在中童网网站上展示的文字描述、图画和/或照片，可以是(a) 对您拥有而您希望出售的产品的描述；或 (b) 对您正寻找的产品的描述。您可在中童网网站发布任一类产品描述，或两种类型同时发布，条件是，您必须将该等产品描述归入正确的类目内。（c）未经合法权利人的许可，任何人严禁在本网站展示产品图片。任何未经授权便在本网站上使用该图片都可能违反国际法，商标法，隐私权法，通讯、通信等法律法规。
            中童网网站不对产品描述的准确性或内容负责。 
             

             8.2 处理交易争议。 
             本公司不会且不能牵涉进交易各方的交易当中。倘若您与一名或一名以上用户，或与您通过本公司网站获取其服务的第三者服务供应商发生争议，您免除中童网 (及本公司代理人和雇员) 在因该等争议而引起的任何 (实际和后果性的) 权利主张、要求和损害赔偿等方面的责任。 
              
              8.3 运用常识。 
              本公司不能亦不试图对其他用户通过“服务”提供的资料进行控制。就其本质而言，其他用户的资料，可能是令人反感的、有害的或不准确的，且在某些情况下可能带有错误的标识说明或以欺诈方式加上标识说明。本公司希望您在使用本公司网站时，小心谨慎并运用常识。 
               
               9.交易系统。 
                
                9.1 不得操纵交易。 
                您同意不利用同伙(下属的客户或第三方)，操纵与另一交易方所进行的商业谈判的结果。 
                 
                 9.2 系统完整性。 
                 您同意，您不得使用任何装置、软件或例行程序干预www.ztb2b.com网站的正常运作或正在本公司网站上进行的任何交易。您不得采取对任何将不合理或不合比例的庞大负载加诸本公司网络结构的行动。 
                  
                  9.3 反馈。 
                  您不得采取任何可能损害信息反馈系统的完整性的行动，诸如：利用第二会员身份标识或第三者为您本身留下正面反馈；利用第二会员身份标识或第三者为其他用户留下负面反馈 (反馈数据轰炸)；或在用户未能履行交易范围以外的某些行动时，留下负面的反馈 (反馈恶意强加)。 
                   

                   10. 终止或访问限制。 
                   您同意，在中童网未向您收费的情况下，中童网可自行全权决定以任何理由 (包括但不限于中童网认为您已违反条款规定，或您以不符合条款规定的方式行事，或您在超过90天的时间内未以您的帐号及密码登录网站) 终止您的“服务”密码、帐户 (或其任何部份) 或您对“服务”的使用，并删除和丢弃您在使用“服务”中提交的 “您的资料”。您同意，在中童网向您收费的情况下，中童网应基于合理的怀疑且经电子邮件通知的情况下实施上述终止服务的行为。中童网同时可自行全权决定，在发出通知或不发出通知的情况下，随时停止提供“服务”或其任何部份。您同意，根据本协议的任何规定终止您使用“服务”之措施可在不发出事先通知的情况下实施，并承认和同意，中童网可立即使您的帐户无效，或撤销您的帐户以及在您的帐户内的所有相关资料和档案，和/或禁止您进一步接入该等档案或“服务”。帐号终止后，中童网没有义务为您保留原帐号中或与之相关的任何信息，或转发任何未曾阅读或发送的信息给您或第三方。此外，您同意，中童网不会就终止您接入“服务”而对您或任何第三者承担任何责任。第12、13、14和22各条应在本协议终止后继续有效。 

                    
                    11. 违反规则的处理。
                    在不限制其他补救措施的前提下，发生下述任一情况，本公司可立即发出警告，暂时中止、永久终止您的会员资格，删除您的任何现有产品信息，以及您在网站上展示的任何其他资料：(i) 您违反本协议；(ii) 本公司无法核实或鉴定您向本公司提供的任何资料；或 (iii) 本公司相信您的行为可能会使您、本公司用户或通过本公司或本公司网站提供服务的第三者服务供应商发生任何法律责任。在不限制任何其他补救措施的前提下，倘若发现您从事涉及本公司网站的诈骗活动，中童网可暂停或终止您的帐户。
                    您同意，如果本网站接到任何人关于您所提供的您的或您的产品的信息侵犯其合法权益的书面通知，或本网站有理由认为您提供的您的信息或产品信息可能侵犯了第三人的合法权利，包括但不限于对第三人商标权、域名权、专利权等知识产权的侵犯，本网站可向您发出警告，并暂时中止对您的服务，您在接到警告后，可以通过向我们提供您信息合法的相关材料，或者通过变更您可能侵权的信息的方式，向本网申请恢复对您的服务。本网站审查您提供的材料或审查您提交的变更信息后，如认为该信息不再构成对他人权利的侵犯，将恢复对您提供服务。本网站不承担任何由此对您暂停服务或删除信息给您带来的任何直接或间接的一切损失。

                    12. 服务“按现状”提供。 
                    本公司会尽一切努力使您在使用中童网网站的过程中得到乐趣。遗憾的是，本公司不能随时预见到任何技术上的问题或其他困难。该等困难可能会导致数据损失或其他服务中断。为此，您明确理解和同意，您使用“服务”的风险由您自行承担。“服务”以“按现状”和“按可得到”的基础提供。中童网明确声明不作出任何种类的所有明示或暗示的保证，包括但不限于关于适销性、适用于某一特定用途和无侵权行为等方面的保证。中童网对下述内容不作保证：(i)“服务”会符合您的要求；(ii)“服务”不会中断，且适时、安全和不带任何错误；(iii) 通过使用“服务”而可能获取的结果将是准确或可信赖的；及 (iv) 您通过“服务”而购买或获取的任何产品、服务、资料或其他材料的质量将符合您的预期。通过使用“服务”而下载或以其他形式获取任何材料是由您自行全权决定进行的，且与此有关的风险由您自行承担，对于因您下载任何该等材料而发生的您的电脑系统的任何损毁或任何数据损失，您将自行承担责任。您从中童网或通过或从“服务”获取的任何口头或书面意见或资料，均不产生未在本协议内明确载明的任何保证。 
                     
                     13. 责任范围。 
                     您明确理解和同意，中童网不对因下述任一情况而发生的任何损害赔偿承担责任，包括但不限于利润、商誉、使用、数据等方面的损失或其他无形损失的损害赔偿 (无论中童网是否已被告知该等损害赔偿的可能性)：(i) 使用或未能使用“服务”；(ii) 因通过或从“服务”购买或获取任何货物、样品、数据、资料或服务，或通过或从“服务”接收任何信息或缔结任何交易所产生的获取替代货物和服务的费用；(iii) 未经批准接入或更改您的传输资料或数据；(iv) 任何第三者对“服务”的声明或关于“服务”的行为；或 (v) 因任何原因而引起的与“服务”有关的任何其他事宜，包括疏忽。 
                      
                      14. 赔偿。 
                      您同意，因您违反本协议或经在此提及而纳入本协议的其他文件，或因您违反了法律或侵害了第三方的权利，而使第三方对中童网及其子公司、分公司、董事、职员、代理人提出索赔要求（包括司法费用和其他专业人士的费用），您必须赔偿给中童网及其子公司、分公司、董事、职员、代理人，使其等免遭损失。 
                       
                       15. 遵守法律。 
                       您应遵守与您使用“服务”，以及与您竞买、购买和销售任何物品以及提供商贸信息有关的所有相关的法律、法规、条例和规章。 
                        
                        16. 无代理关系。 
                        您与中童网仅为独立订约人关系。本协议无意结成或创设任何代理、合伙、合营、雇用与被雇用或特许权授予与被授予关系。 
                         
                         17. 广告和金融服务。 
                         您与在“服务”上或通过“服务”物色的刊登广告人士通讯或进行业务往来或参与其推广活动，包括就相关货物或服务付款和交付相关货物或服务，以及与该等业务往来相关的任何其他条款、条件、保证或声明，仅限于在您和该刊登广告人士之间发生。您同意，对于因任何该等业务往来或因在“服务”上出现该等刊登广告人士而发生的任何种类的任何损失或损毁，中童网无需负责或承担任何责任。您如打算通过“服务”创设或参与与任何公司、股票行情、投资或证券有关的任何服务，或通过“服务”收取或要求与任何公司、股票行情、投资或证券有关的任何新闻信息、警戒性信息或其他资料，敬请注意，中童网不会就通过“服务”传送的任何该等资料的准确性、有用性或可用性、可获利性负责或承担任何责任，且不会对根据该等资料而作出的任何交易或投资决策负责或承担任何责任。 
                          
                          18. 链接。 
                          “服务”或第三者均可提供与其他万维网网站或资源的链接。由于中童网并不控制该等网站和资源，您承认并同意，中童网并不对该等外在网站或资源的可用性负责，且不认可该等网站或资源上或可从该等网站或资源获取的任何内容、宣传、产品、服务或其他材料，也不对其等负责或承担任何责任。您进一步承认和同意，对于任何因使用或信赖从此类网站或资源上获取的此类内容、宣传、产品、服务或其他材料而造成（或声称造成）的任何直接或间接损失，中童网均不承担责任。 
                           
                           19. 通知。 
                           除非另有明确规定，任何通知应以电子邮件形式发送，电子邮件地址为 service@mail.china.cn，或 (就您而言) 发送到您在登记过程中向中童网提供的电子邮件地址，或有关方指明的该等其他地址。在电子邮件发出二十四 (24) 小时后，通知应被视为已送达，除非发送人被告知相关电子邮件地址已作废。或者，本公司可通过邮资预付挂号邮件并要求回执的方式，将通知发到您在登记过程中向中童网提供的地址。在该情况下，在付邮当日三 (3) 天后通知被视为已送达。 
                            
                            20. 不可抗力。 
                            对于因本公司合理控制范围以外的原因，包括但不限于自然灾害、罢工或骚乱、物质短缺或定量配给、暴动、战争行为、政府行为、通讯或其他设施故障或严重伤亡事故等，致使本公司延迟或未能履约的，中童网不对您承担任何责任。 
                             
                             21. 转让。 
                             中童网转让本协议无需经您同意。 
                              
                              22. 其他规定。 
                              本协议构成您和中童网之间的完整协议。本协议各方面应受中华人民共和国法律的管辖。条款标题仅为方便参阅而设，并不以任何方式界定、限制、解释或描述该条款的范围或限度。
                              23. 争议解决。 
                              因本协议或本公司服务所引起的任何争议应向北京仲裁委员会提起仲裁解决。</textarea>
</div>
    </div></form>
    <div style="clear:both"></div>
</div>
