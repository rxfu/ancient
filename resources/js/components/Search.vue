<template>
    <div class="container">
        <div class="text-center">
            <h2>廣西師範大學古籍書目檢索平臺</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" name="keyword" placeholder="請輸入關鍵詞進行檢索" class="form-control">
                        <input type="submit" name="search" value="檢索" class="btn btn-primary">
                    </div>
                </form>
                <small class="form-text text-muted">僅支援繁體字檢索</small>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-12 jumbotron">
                <h2>廣西師大圖書館“館藏古籍查詢系統”使用說明</h2>
                
                <ol>
                    <li>
                        本查詢系統只設有書名、作者兩個基本檢索點，提供了本館所藏古籍的書名、著者、著作方式、版本項、函數、卷/冊數、存卷/冊數、部/套數、四部分類號、附注以及索書號、財產號等基本資訊。
                    </li>
                    <li>
                        本系統依據原有卡片目錄繁體字著錄，讀者查詢時需使用繁體字檢索。
                    </li>
                    <li>
                        凡原卡片目錄中出現的異體字，一律統一於常見繁體字，如：“菴”用“庵”，“藳”用“稿”，“劄”用“札”，“攷”用“考”，“誌”用“志”……。
                    </li>
                    <li>
                        本系統還可用于叢書書名、叢書子目（叢書子目書名、叢書子目著者）查詢。
                    </li>
                </ol>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
