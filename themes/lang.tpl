<form name="langselect" id="langselect" method="post">                        
    <select name="language" onChange="document.langselect.submit()" style="font-size: 12px"> 
        <option value="english" {if $smarty.session.language eq "english"}selected{/if} >English</option> 
        <option value="spanish" {if $smarty.session.language eq "spanish"}selected{/if}>EspaÃƒÂ±ol</option> 
        <option value="french" {if $smarty.session.language eq "french"}selected{/if}>FranÃƒÂ§ais</option> 
        <option value="portuguese" {if $smarty.session.language eq "portuguese"}selected{/if}>PortuguÃƒÂªs</option>
        <option value="hebrew" {if $smarty.session.language eq "hebrew"}selected{/if}>Ã—Â¢Ã—â€˜Ã—Â¨Ã—â„¢Ã—Âª</option>
        <option value="german" {if $smarty.session.language eq "german"}selected{/if}>Deutsch</option>
        <option value="arabic" {if $smarty.session.language eq "arabic"}selected{/if}>Ã˜Â§Ã™â€žÃ˜Â¹Ã˜Â±Ã˜Â¨Ã™Å Ã˜Â©</option>
        <option value="chinese" {if $smarty.session.language eq "chinese"}selected{/if}>Ã¤Â¸Â­Ã¦â€“â€¡</option>
        <option value="russian" {if $smarty.session.language eq "russian"}selected{/if}>Ã‘â‚¬Ã‘Æ’Ã‘ï¿½Ã‘ï¿½Ã�ÂºÃ�Â¸Ã�Â¹</option>
    </select>
</form>