import {ServerDataService} from "../services/server-data";
import {ServerData} from "../model/server-data";
import {LangChangeEvent, TranslateService} from "@ngx-translate/core";
import {Injectable} from "@angular/core";

export interface ServerDataListener {
    onServerDataUpdate(serverData: ServerData);
}

@Injectable()
export class ServerDataManager {
    protected static instance: ServerDataManager;

    constructor(
        protected service: ServerDataService,
        protected translateService: TranslateService
    ) {
        if (ServerDataManager.instance != null) {
            this.update();
            translateService.onLangChange.subscribe((event: LangChangeEvent) => {
                this.update();
            });
        }
        return ServerDataManager.instance = ServerDataManager.instance || this;
    }

    protected serverData: ServerData;
    protected listeners: ServerDataListener[] = [];

    public subscribe(listener: ServerDataListener) {
        this.listeners.push(listener);
    }

    public getLang() {
        return this.translateService.currentLang;
    }

    public changeLang(lang) {
        this.translateService.use(lang);
        this.update();
    }

    protected update() {
        this.service.getData().subscribe(serverData => {
            this.serverData = serverData;
            this.onUpdate();
        });
    }

    protected onUpdate() {
        for (let k in this.listeners) {
            this.listeners[k].onServerDataUpdate(this.serverData);
        }
    }
}
