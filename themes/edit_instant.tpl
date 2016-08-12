									{if $g.ifile GT "0" OR $g.iurl ne ""}
                                    {else}
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_expected_duration">{$lang79}</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="{$g.days|stripslashes}" />
                                          <div>{$lang80}</div>
                                        </div>
                                    </div>
                                    {/if}