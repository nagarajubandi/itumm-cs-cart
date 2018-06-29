<script type="text/javascript">
//<![CDATA[
(function(_, $) {
    {if !$smarty.request.init_context}
        $(document).ready(function(){
            var tabsBlocks = {
                container: null,
                navi: null,
                lis: [],
                blocks: [],
                init: function (obj) {
                    var self = this;

                    this.container = obj;
                    this.navi = $('ul:first', this.container);
                    var lis = $('li', this.navi).toArray();
                    var is_first = true;

                    for (i in lis) {
                        var block_id = lis[i].className.match(/cm-block-index-([\w]+)?/gi);

                        if ($('.cm-tab-block.' + block_id).length) {
                            this.lis[block_id] = $(lis[i]);
                            this.blocks[block_id] = $('.cm-tab-block.' + block_id, this.container);
                            if (is_first) {
                                this.lis[block_id].addClass('active');
                                is_first = false;
                            } else {
                                this.blocks[block_id].addClass('hidden');
                            }
                            $(this.lis[block_id]).on('click', function () {
                                var block_id = this.className.match(/cm-block-index-([\w]+)?/gi);
                                self.switchBlock(block_id);
                            });
                        } else {
                            $(lis[i]).remove();
                        }
                    }
                },
                switchBlock: function (indexBlock) {
                    $(this.blocks[indexBlock]).removeClass('hidden');

                    for (i in this.lis) {
                        if (indexBlock == i) {
                            $(this.blocks[i]).removeClass('hidden');
                            $(this.lis[i]).addClass('active');
                        } else {
                            $(this.blocks[i]).addClass('hidden');
                            $(this.lis[i]).removeClass('active');
                        }
                    }
                }
            };
            $('.cm-tabs-blocks').each(function () {
                var newObject = jQuery.extend(true, {}, tabsBlocks);
                newObject.init($(this));
            });
        });
    {/if}
}(Tygh, Tygh.$));
//]]>
</script>