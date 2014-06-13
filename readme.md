# [Wild Wood Creations](http://wildwoodcreations.biz)

Wild Wood Creations is where your dreams of beautiful furniture and home decore begin. We specialize in log, rustic, and western themes. We take pride in our work and strive to please our customers. We take the extra time to ensure we understand exactly what you want. You will be glad you chose us for all your furniture and home decor needs.


Copyright (c) 2014 [Prasuhn Design](http://prasuhndesign.com).



Faculty/Staff/Profile Directory - with jQuery Datatables
-------

#### Included Files

It is suggested to put all of these files in their correct location in OU Campus, ex. xsl's go in the xsl folder.

File | Required | Description
---- | -------- | -----------
helper.xsl | YES | Helps the profile.xsl, be sure to change line 21 for appropriate scripting language
profile-xml.xsl | YES | Generates the xml output of your profiles, be sure to call this file in your PCF
profile.xsl | YES | Where the magic happens
_profile_section.tcf | YES | Creates a new profile section, update as necessary
profile.tcf | YES | Starts the creation of a new individual profile page
profile.tmpl | YES | Finalizes the individual profile creation process, creates a multi-edit page for each profile.  Suggestion would be to base this off of an existing template in the site and copy over the profile node with the multi-edit.
profile_landing.tmpl | YES | Creates the profile landing page. From the _profile_section.tcf.

#### Notes

Somethings to remember/note about this code

1. Include all of the files in all the right places, probably common.xsl.
2. Double check your paths to all files, even images before you say its broken.
3. Don't forget to include profile-xml.xsl in your individual profile pcf as well as your listing page pcf, like so ```
<?pcf-stylesheet path="/_resources/xsl/profiles/profile-xml.xsl" alternate="yes" extension="xml"?>
```
4. Don't forget to update the helper.xsl on line 21 with you server side scripting language.
5. If you are or are not using ```mode="copy"``` for apply-templates, make sure you update that, don't forget the helper.xsl
6. Robert Kiffe built this, Bradley Prasuhn and Caroline Spooner modified it. Thanks Rob.

#### jQuery dataTables

* dataTables are not required for this to work, however they do require jQuery to work.
* Add jQuery dataTables in last, ensure your profile is working before you try to make it fancy.
* [https://datatables.net/](https://datatables.net/)
* [https://github.com/DataTables/DataTables](https://github.com/DataTables/DataTables)

Code samples for adding dataTables into the xsl's.

```Add to the profile.xsl in the template headcode
<!--Checks to see if there is a not a profile node then it knows it is on the listing page, so it needs the jQuery dataTables code-->
		<xsl:if test="not(profile)">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<link href="/_resources/css/jquery.dataTables.css" rel="stylesheet" />
			<script src="/_resources/js/jquery.dataTables.js"></script>
			<script>
<!--ADD IN FOR FILTER DROP DOWN FOR DATATABLES-->
			<!--$(document).ready(function() {
    /* Initialise datatables */
    var oTable = $('#profiles').dataTable();

    /* Add event listener to the dropdown input */
    $('select#location').change( function() { oTable.fnFilter( $(this).val() ); } );
    } );--> 

    $(document).ready(function(){
    $('#profiles').dataTable();
    });
</script>
</xsl:if>```

```
dataTables filter code for profile.xsl
<!--ADD IN FOR FILTER DROP DOWN ON DATATABLES-->
					<table>
						<tbody>
							<tr>
								<td>
									<p>
									Filter by location:
									</p>
									<select id="location">
										<option value="">- Select -</option>
										<option value="Charity School of Nursing">Charity School of Nursing</option>
										<option value="City Park">City Park</option>
										<option value="Gretna Facility">Gretna Facility</option>
										<option value="Jefferson Site (Technical Division)">Jefferson Site (Technical Division)</option>
										<option value="Maritime, Fire and Industrial Facility">Maritime, Fire and Industrial Facility</option>
										<option value="Northshore - Covington">Northshore - Covington</option>
										<option value="Northshore - Slidell">Northshore - Slidell</option>
										<option value="West Bank">West Bank</option>
										<option value="West Jefferson Site (Technical Division)">West Jefferson Site (Technical Division)</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>```

