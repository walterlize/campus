<div style="margin-left:20px; margin-right:20px">
    <br />
    <h3>填写实习总结</h3>
    <form name="form1" method="post" action="<?= base_url() ?>index.php/student/summary/save/<?= $mission->m_id ?>" id="form1">
        <input type="hidden" value="<?= $summary->sumId ?>" name="sumId" id="sumId" />

        <table cellpadding="0" cellspacing="1" class="tablist2">  
            <tr>
                <td class="td1" style="width: 111px">实习总结任务标题</td>
                <td class="td2" ><?= $mission->title ?>&nbsp;</td>
            </tr>
            <tr>
                <td class="td1" style="width: 111px">下达时间</td>
                <td class="td2" ><?= $mission->workTime ?>&nbsp;</td>
            </tr>      
            <tr>
                <td class="td1" style="width: 111px">教师姓名</td>
                <td class="td2" ><?= $mission->courseTeaName ?>&nbsp;</td>
            </tr>
            <tr>
                <td class="td1" style="width: 111px">实习总结内容</td>
                <td class="td2" >
                    <script type="text/javascript">
			KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '<?=base_url()?>kindeditor/plugins/code/prettify.css',
				uploadJson : '<?=base_url()?>kindeditor/php/upload_json.php',
				fileManagerJson : '<?=base_url()?>kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=content]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=content]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
		</script>
                    <textarea name="content" id="content" style="visibility:hidden; width:80%; height:300px;"><?=$summary->content?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="td3" align="center">
                    <input type="submit" name="btnSave" value="提 交" onclick="return check('form1');" id="btnSave" class="input" />
                    <input type="button" name="btnReturn" value="返 回" onclick="window.location.href='<?= base_url() ?>index.php/student/summary/summaryList';" id="btnReturn" class="input" />
                    <input type="button" name="btnCancel" value="取 消" onclick="window.location.href='<?= base_url() ?>index.php/student/summary/summaryDetail/<?= $summary->sumId ?>';" id="btnCancel" class="input" style="<?php if (isset($show)) echo $show; ?>" />      </td>
            </tr>
        </table>
    </form>
</div>