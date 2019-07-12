<v-tabs
        v-model="activeTab"
        vertical
        color="#7db70d"

        optional
>
    <div :style="sizeTab">
        <v-tab
                v-for="(item, index) in items"
                :key="`item-${index}`"
                style="justify-content: left;"
                @click="decreaseTabSize"
        >
            <v-icon left>@{{ item.avatar }}</v-icon>
            <div v-if="activeTab === null">@{{ item.title }}</div>
        </v-tab>
    </div>

    <v-tabs-items
            v-if="activeTab !== null"
            v-model="activeTab"
    >

        <v-tab-item
                v-for="(item, index) in items"
                :key="`item-${index}`"
                transition="none"
                reverse-transition="none"
        >
            <v-card flat color="basil">
                <v-card-text class="pl-0 pr-0 ml-2">

                    <div class="pb-2" style="color: #7db70d; font-weight: bold">
                        Zu den Produkten
                        <v-icon small class="pl-1" color="#7db70d">fas fa-chevron-right</v-icon>
                    </div>
                    <v-divider></v-divider>
                    <div
                            class="mb-2"
                            v-for="(category, categoryIndex) in item.categories"
                    >
                        <div class="pt-4">
                            <a style="color : #7db70d; font-weight: bold; text-decoration: none;" href="#">
                                @{{ category.title }}
                            </a>
                        </div>

                        <div
                                v-for="(categoryItem, categoryItemIndex) in category.items"
                        >
                            @{{ categoryItem }}
                        </div>

                    </div>

                    <v-divider></v-divider>

                    <v-btn
                            color="#7db70d"
                            class="mt-3 mb-3"
                            depressed
                            small
                            @click.stop="activeTab = null"
                            @click="increaseTabSize"
                    >
                        <v-icon small color="#fff" class="pr-2">fas fa-caret-left</v-icon>
                        <span style="color: #fff; text-transform: lowercase">zurück</span>
                    </v-btn>

                    <v-btn
                            color="#7db70d"
                            class="mt-3 mb-3"
                            depressed
                            small
                            @click.stop="drawer = !drawer"
                            @click="increaseTabSize"
                    >
                        <span style="color: #fff; text-transform: lowercase">schließen</span>
                        <v-icon small color="#fff" class="pl-2">fas fa-times</v-icon>
                    </v-btn>

                </v-card-text>
            </v-card>
        </v-tab-item>

    </v-tabs-items>

</v-tabs>
