from typing import Optional, List
from pydantic import BaseModel, Field


class createLibraryModel(BaseModel):
    name: str
    picture_url: str
    id: str = Field(min_length=5, max_length=5)
    price: float
    stories: str
    Numberofpages: str
    Volumeimagesize: str
    Papertexture: str
    Papertype: str
    publisher: str
    MouthyearofPublication: str


class updateLibraryModel(BaseModel):

    name: Optional[str]
    picture_url: Optional[str]
    price: Optional[str]
    stories: Optional[List[str]]
    Numberofpages: Optional[int]
    Volumeimagesize: Optional[str]
    Papertexture: Optional[str]
    Papertype: Optional[str]
    publisher: Optional[str]
    MouthyearofPublication: Optional[str]


