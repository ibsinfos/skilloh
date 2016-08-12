{if $subresults.ifile GT "0"}
	<br /><b>INSTANT DELIVERY GIG FILE: </b>
    {insert name=file_details value=a assign=fd fid=$subresults.ifile}
    {section name=x loop=$fd}
    {insert name=gfs value=a assign=afs fid=$fd[x].FID}
    <a href="{$baseurl}/files/{$fd[x].FID|md5}{$fd[x].s}/{$fd[x].fname}" target="_blank">{$fd[x].fname} <b>[{$afs}]</b></a>
    {/section}
{elseif $subresults.iurl ne ""}
	<br /><b>INSTANT DELIVERY GIG URL: </b>
    <a target="_blank" href="{$subresults.iurl|stripslashes}">{$subresults.iurl|stripslashes}</a>
{/if}