									{literal}
                                    <script language="javascript" type="text/javascript">
                                    function scriptolutiontoggle(obj, obbox) 
									{										
										if(obbox == 'multipleme')							
										{
											$('#extrasmore').hide();
											$('#shipmore').hide();
											if ($('#multipleme').is(":checked")) 
											{
												$('#multiplemore').show();
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#multiplemore').hide();
											}
											
										}
										else if(obbox == 'extrasme')							
										{
											$('#multiplemore').hide();
											$('#shipmore').hide();
											if ($('#extrasme').is(":checked")) 
											{
												$('#extrasmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#shipme').is(":checked")) 
												{
													$("#shipme").removeAttr("checked");
												}
											}
											else
											{
												$('#extrasmore').hide();
											}
										}
										else if(obbox == 'shipme')							
										{
											$('#multiplemore').hide();
											$('#extrasmore').hide();
											if ($('#shipme').is(":checked")) 
											{
												$('#shipmore').show();
												if ($('#multipleme').is(":checked")) 
												{
													$("#multipleme").removeAttr("checked");
												}
												if ($('#extrasme').is(":checked")) 
												{
													$("#extrasme").removeAttr("checked");
												}
											}
											else
											{
												$('#shipmore').hide();
											}
										}
                                    }
                                    </script>
                                    {/literal}