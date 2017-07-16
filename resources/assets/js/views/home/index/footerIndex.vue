<template>
    <div class="footer-wrapper">
        <el-popover
                ref="popover1"
                placement="right-start"
                title="标题"
                width="200"
                trigger="click"
                content="这是一段内容,这是一段内容,这是一段内容,这是一段内容。">
        </el-popover>
        <div class="footer-wrapper-content">
            <div class="footer_about item">
                <h4>关于尚格</h4>
                <ul>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">关于我们</a></li>
                </ul>
            </div>
            <div class="footer_design item">
                <h4>设计体验中心</h4>
                <ul>
                    <li><a href="">网站地图</a></li>
                    <li><a href="">网站地图</a></li>
                    <li><a href="">网站地图</a></li>
                    <li><a href="">网站地图</a></li>
                    <li><a href="">网站地图</a></li>
                </ul>
            </div>
            <div class="footer_brand item">
                <h4>旗下品牌</h4>
                <ul>
                    <li><a href="">尚格之家</a></li>
                    <li><a href="">尚格之家</a></li>
                </ul>
            </div>
            <div class="footer_social item">
                <h4>社交媒体</h4>
                <ul>
                    <li><a href="">微信</a></li>
                    <li><a href="">微信</a></li>
                    <li><a href="">微信</a></li>
                    <li><span v-popover:popover1>微信</span></li>
                </ul>
            </div>
        </div>
    </div>
</template>