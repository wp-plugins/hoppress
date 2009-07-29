<?php		

		echo '<p style="text-align:left;"><label for="hoppress-title">Title:</label><br /> <input style="width: 235px;" id="hoppress-title" name="hoppress-title" type="text" value="'.$title.'" /></p>';

		//You need one of these for each option/parameter.  You can use input boxes, radio buttons, checkboxes, etc.
		echo '<p style="text-align:left;"><label for="hoppress-parameter1">ClickBank Affiliate ID:</label><br /> <input style="width: 235px;" id="hoppress-parameter1" name="hoppress-parameter1" type="text" value="'.$options['parameter1'].'" /></p>';
		echo '<p style="text-align:left;"><label for="hoppress-parameter2">Ad Keywords:</label><br /> <input style="width: 235px;" id="hoppress-parameter2" name="hoppress-parameter2" type="text" value="'.$options['parameter2'].'" /></p>';
		echo '<p style="text-align:left;"><label for="hoppress-parameter3">Tracking ID:</label><br /> <input style="width: 235px;" id="hoppress-parameter3" name="hoppress-parameter3" type="text" value="'.$options['parameter3'].'" /></p>';

		echo '<div style="display:block;width:235px"><table width="100%" align="left" style="margin:0 0 12px 0" border=0><tr><td align="left"><label for="hoppress-parameter4">Width:</label></td><td align="left"><label for="hoppress-parameter5">Height:</label></td></tr><tr><td align="left"><input style="width: 95px;" id="hoppress-parameter4" name="hoppress-parameter4" type="text" value="'.$options['parameter4'].'" /></td><td style="width: 95px;"><input style="width: 95px;" id="hoppress-parameter5" name="hoppress-parameter5" type="text" value="'.$options['parameter5'].'" /></td></tr></table></div>';
		
		echo '<div style="display:block;width:235px"><table width="100%" align="left" style="margin:0 0 12px 0" border=0><tr><td align="left"><label for="hoppress-parameter6">Link Color:</label></td><td align="left"><label for="hoppress-parameter7">Hover Color:</label></td></tr><tr><td align="left"><input style="width: 95px;" id="hoppress-parameter6" name="hoppress-parameter6" type="text" value="'.$options['parameter6'].'" /></td><td style="width: 95px;"><input style="width: 95px;" id="hoppress-parameter7" name="hoppress-parameter7" type="text" value="'.$options['parameter7'].'" /></td></tr></table></div>';
		
		echo '<p style="text-align:left;"><label for="hoppress-parameter8">Font:</label><br /> <input style="width: 235px;" id="hoppress-parameter8" name="hoppress-parameter8" type="text" value=\''.$options['parameter8'].'\' /></p>';
		
		echo '<div style="display:block;width:235px"><table width="100%" align="left" style="margin:0 0 12px 0" border=0><tr><td align="left"><label for="hoppress-parameter9">Text Color:</label></td><td align="left"><label for="hoppress-parameter10">Text Size:</label></td></tr><tr><td align="left"><input style="width: 95px;" id="hoppress-parameter9" name="hoppress-parameter9" type="text" value="'.$options['parameter9'].'" /></td><td style="width: 95px;"><input style="width: 95px;" id="hoppress-parameter10" name="hoppress-parameter10" type="text" value="'.$options['parameter10'].'" /></td></tr></table></div>';
		
		echo '<div style="display:block;width:235px"><table width="100%" align="left" style="margin:0 0 12px 0" border=0><tr><td align="left"><label for="hoppress-parameter11">Ad Columns:</label></td><td align="left"><label for="hoppress-parameter12">Ad Rows:</label></td></tr><tr><td align="left"><input style="width: 95px;" id="hoppress-parameter11" name="hoppress-parameter11" type="text" value="'.$options['parameter11'].'" /></td><td style="width: 95px;"><input style="width: 95px;" id="hoppress-parameter12" name="hoppress-parameter12" type="text" value="'.$options['parameter12'].'" /></td></tr></table></div>';		
		
		echo '<div style="display:block;width:235px"><table width="100%" align="left" style="margin:0 0 12px 0" border=0><tr><td align="left"><label for="hoppress-parameter13">Background Color:</label></td><td align="left"><label for="hoppress-parameter14">Border Color:</label></td></tr><tr><td align="left"><input style="width: 95px;" id="hoppress-parameter13" name="hoppress-parameter13" type="text" value="'.$options['parameter13'].'" /></td><td style="width: 95px;"><input style="width: 95px;" id="hoppress-parameter14" name="hoppress-parameter14" type="text" value="'.$options['parameter14'].'" /></td></tr></table></div>';		
				
				


		echo '<input type="hidden" id="hoppress-submit" name="hoppress-submit" value="1" />';
?>