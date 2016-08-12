{insert name=get_extras value=a assign=extras PID=$subresults.PID}
{if $extras|@count GT 0}
<br /><b>THIS GIG HAS THE FOLLOWING EXTRAS: </b>
{section name=i loop=$extras}
<br />- {$lang62} {$extras[i].etitle|stripslashes} {$lange1} {$lang197}{$extras[i].eprice|stripslashes} <a href="{$adminurl}/scriptolution_edit_extra.php?EID={$extras[i].EID}">[EDIT]</a>
{/section}	
{/if}
