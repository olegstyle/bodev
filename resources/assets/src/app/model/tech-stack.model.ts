import {BaseModel} from "./base-model";

export class TechStackModel extends BaseModel {
    public id: number;
    public name: string;
    public image_url: string;
    public level: number;
    public date_start: string;
    public created_at: Date;
    public updated_at: Date;
    public group_id: number;
}