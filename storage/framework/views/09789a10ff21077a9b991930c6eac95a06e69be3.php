<v-tabs
        v-model="activeTab"
        vertical
        color="#7db70d"
        optional
>
    <v-tab
            v-for="(item, index) in items"
            :key="`item-${index}`"
            style="justify-content: left;"
    >
        <v-icon left>{{ item.avatar }}</v-icon>
        <div v-if="activeTab === null">{{ item.title }}</div>
    </v-tab>

    <v-tabs-items
            v-if="activeTab !== null"
            v-model="activeTab"
    >
        <v-tab-item
                v-for="(item, index) in items"
                :key="`item-${index}`"
        >
            <v-card flat color="basil">
                <v-card-text>

                    <div
                            v-for="(category, categoryIndex) in item.categories"
                    >
                        <strong>{{ category.title }}</strong>


                        <div
                                v-for="(categoryItem, categoryItemIndex) in category.items"
                        >
                            {{ categoryItem }}
                        </div>

                    </div>

                </v-card-text>
            </v-card>
        </v-tab-item>

    </v-tabs-items>

</v-tabs>
<?php /**PATH /Users/cbr/Sites/vue/laravel/resources/views/navigation.blade.php ENDPATH**/ ?>