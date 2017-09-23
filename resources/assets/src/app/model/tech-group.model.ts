import {BaseModel} from "./base-model";

export class TechGroupModel extends BaseModel {
    public id: number;
    public name: string;
    public order: number;
    public created_at: Date;
    public updated_at: Date;
}