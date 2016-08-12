<br /><br />
{if $o.IID GT "0"}
{insert name=get_extras_track value=a assign=etas OID=$o.OID}
{if $etas[0].EID gt "0" OR $etas[0].EID2 gt "0" OR $etas[0].EID3 gt "0"}
<b>{$lange6}:</b>
{if $etas[0].EID gt "0"}
{insert name=get_extra value=a assign=ename EID=$etas[0].EID}
<span><p>- {$ename|stripslashes}</p></span>
{/if}
{if $etas[0].EID2 gt "0"}
{insert name=get_extra value=a assign=ename EID=$etas[0].EID2}
<span><p>- {$ename|stripslashes}</p></span>
{/if}
{if $etas[0].EID3 gt "0"}
{insert name=get_extra value=a assign=ename EID=$etas[0].EID3}
<span><p>- {$ename|stripslashes}</p></span>
{/if}
{/if}
{/if}