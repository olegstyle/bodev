import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ServerData } from "../model/server-data";
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';

@Injectable()
export class ServerDataService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'techStacks';
    }
    private url;

    public getData(): Observable<ServerData> {
        return this.http.get(this.url);
    }
}